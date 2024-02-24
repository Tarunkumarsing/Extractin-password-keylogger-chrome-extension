# Password Extractor Extension

## Introduction
Welcome to the Password Extractor, a unique Chrome extension designed to record and analyze keystrokes made on webpages. This tool serves as a powerful demonstration of how browser extensions can interact with user inputs and transmit data for analysis. It's intended for educational purposes, to showcase the capabilities of web technologies and promote awareness around web security.

### Disclaimer
This project is for educational and ethical testing purposes only. It should only be used on websites and systems where explicit permission has been granted. Unauthorized use of this tool to capture or analyze keystrokes without consent is illegal and unethical.

## Project Structure
The Password Extractor is composed of three main components, each playing a crucial role in its operation:

- **Manifest.json:** The heart of the extension, defining its name, permissions, and the scripts it uses.
- **Background.js:** The brain, responsible for sending captured data to a designated server.
- **Content.js:** The fingers, capturing every keystroke made on the webpage and preparing it for transmission.

Additionally, a server-side script (`keystrokes.php`) collects and stores the data sent by the extension.

## Setup and Installation
To set up and use the Password Extractor, follow these steps:

1. **Download the Extension:** Clone or download the extension files to your local machine.
2. **Load the Extension in Chrome:**
   - Open Chrome and navigate to `chrome://extensions/`.
   - Enable Developer Mode by toggling the switch in the top right corner.
   - Click "Load unpacked" and select the directory containing the extension files.
3. **Prepare the Server:**
   - Ensure you have a PHP server running (e.g., using XAMPP).
   - Place the `keystrokes.php` file inside the `htdocs` folder of your server setup.

## How It Works
Once installed, the extension will begin capturing keystrokes on all webpages you visit. The captured data, along with the URL of the webpage, is sent to the server when you navigate away from the page or close the tab.

### Capturing Keystrokes (`content.js`)
- Listens for `keypress` events on the webpage.
- Records the character or special key pressed.
- Bundles the data and URL for transmission upon navigating away from the page.

### Transmitting Data (`background.js`)
- Receives bundled data from `content.js`.
- Sends the data to the server using an XMLHttpRequest to `keystrokes.php`.

### Receiving and Storing Data (`keystrokes.php`)
- Listens for POST requests containing keystroke data.
- Decodes the JSON data and writes it to a file (`keystrokes.txt`) on the server.

## Testing
To test the extension, simply browse the web as you normally would. The extension will silently record keystrokes and send them to your server for analysis.

## Contributing
Contributions to improve the Password Extractor or adapt it for different educational purposes are welcome. Please submit pull requests or issues through GitHub.

## License
Specify the license under which your project is made available.

## Acknowledgements
This project is a demonstration of browser extension capabilities and is intended for educational use. Remember to use it responsibly and ethically.
