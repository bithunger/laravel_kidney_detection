<?php

namespace App\Http\Controllers;

use App\Models\DetectionModel;
use Illuminate\Http\Request;

class DetectionModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function detection_model()
    {
        return view('backend.detection_model.general');
    }

    public function detection_model_update(Request $request,)
    {
        $this->validate($request, [

            'model_name' => 'required',
            'accuracy' => 'required',
            'precision' => 'required',
            'recall' => 'required',
            'f1_score' => 'required',
            'roc_curve' => 'required|image',
            'confusion_matrix' => 'required|image',

        ]);
        DetectionModel::updateOrCreate(['name' => 'model_name'], ['value' => $request->get('model_name')]);
        DetectionModel::updateOrCreate(['name' => 'accuracy'], ['value' => $request->get('accuracy')]);
        DetectionModel::updateOrCreate(['name' => 'precision'], ['value' => $request->get('precision')]);
        DetectionModel::updateOrCreate(['name' => 'recall'], ['value' => $request->get('recall')]);
        DetectionModel::updateOrCreate(['name' => 'f1_score'], ['value' => $request->get('f1_score')]);

        //Update logo
        if ($request->hasFile('roc_curve')) {

            $file = $request->file('roc_curve');
            $file_name = time() . rand(0000, 9999) . '.' . $file->getClientoriginalExtension();
            if (modelSetting('roc_curve')) {
                unlink(modelSetting('roc_curve'));
            }
            $file->move('uploads/roc_curve/', $file_name);

            DetectionModel::updateOrCreate(
                ['name' => 'roc_curve'],
                ['value' => 'uploads/roc_curve/' . $file_name]
            );
        }

        //Update favicon
        if ($request->hasFile('confusion_matrix')) {
            $file = $request->file('confusion_matrix');
            $file_name = time() . rand(0000, 9999) . '.' . $file->getClientoriginalExtension();
            if (modelSetting('confusion_matrix')) {
                unlink(modelSetting('confusion_matrix'));
            }
            $file->move('uploads/confusion_matrix/', $file_name);

            DetectionModel::updateOrCreate(
                ['name' => 'confusion_matrix'],
                ['value' => 'uploads/confusion_matrix/' . $file_name]
            );
        }

        return redirect()->back();
    }
}
