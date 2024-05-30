import os
import sys
import keras
import cv2
import numpy as np
from PIL import Image

# Load the trained model
def predict(image):
    model_path = os.path.join(os.path.dirname(__file__), '..', 'python_scripts', 'final_skin_cancer_multinet_incep_xception_94.h5')
    model = keras.models.load_model(model_path)
    prediction = model.predict(image)
    return prediction

# Preprocess the input image
def preprocess_input_image(image_path):
    img = np.asarray(Image.open(image_path).convert("RGB"))
    img = cv2.resize(img, (224, 224))
    img = np.array(img)
    return img

# Main function
def main():
    # image_path = sys.argv[1]
    print('image_path')

    # input_skin_image = np.array(preprocess_input_image(image_path))
    # input_skin_image_reshape = input_skin_image.reshape(1, 224, 224, 3)
    # prediction = predict(input_skin_image_reshape)
    # prediction = np.argmax(prediction, 1)

    # if prediction[0] == 0:
    #     result = 0
    #     print(result)
    # elif prediction[0] == 1:
    #     result = 1
    #     print(result)
    # elif prediction[0] == 2:
    #     result = 2
    #     print(result)
    # else:
    #     result = 3
    #     print(result)

if __name__ == "__main__":
    main()
