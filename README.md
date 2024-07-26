# STT-ChatGPT-API-and-TTS


## from the previous of txt to speech it got advanced and upated to store the last data in the database into a txt from that txt file it will read question into the new python for chatbot in it will get respond from the chatgpt altho it does not get the data directly from the database but that another solution for it 

## folders
### text to speech folder were previously explained but the newest thing that i will save the latest question in the database into the txt file called latest latest_transcript
### Chatbot also were previously explained in the github 
### lastly also TTS python code where previously explained in the github 
all these folder and files are merged to work in one code 



# Prerequisites

Before running the project, make sure you have the following Python packages installed:

- `gtts`
- `pygame`

You can install these dependencies using pip: as shown in the file up in the top 
You can install these dependencies using pip:

## First: Setup
### OpenAI API Key
You need to replace 'your-api-key' in the script with your actual OpenAI API key. Make sure to keep your API key confidential.

## Second: File path 
Update the file_path variable in the main() function to the location of your text file containing the questions. The default path is set to E:\\Xampp\\Xamp\\htdocs\\SpeechToText\\latest_transcript.txt.

## Third:Dependencies:
Ensure you have all required libraries installed by running the pip commands mentioned above.

## Usage

### start speech to text folder and record a question the question will be stored into the a txt file called latest_transcript.txt
### secondly head to python code and start and run the code the ai bot will respond to the answer over voice 


## code overview 
### send_message(message_log): Sends the conversation history to the OpenAI API and retrieves the assistant's response.

### text_to_speech(text): Converts the assistant's response to speech and plays it using pygame.

### read_question_from_file(file_path): Reads the question from the specified text file.

### main(): The main function that orchestrates reading from the file, interacting with the OpenAI model, and converting responses to speech.

## Troubleshooting

### API Key Issues: Ensure you have correctly replaced the placeholder API key with your actual key.( you may need to add funds) 

### File Path Issues: Verify that the file path is correct and accessible.

### Dependency Issues: Make sure all required libraries are installed and properly set up.


## Acknowledgments

### OpenAI for the GPT-3.5-turbo model.
### Google Text-to-Speech for converting text to speech.
### Pygame for audio playback.

Run the Script: Execute the Python script to start the chatbot. The script reads the question from the specified text file, sends it to the OpenAI model, and plays the response using text-to-speech.
