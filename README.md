🌐 Personal Practice App
Welcome to the Personal Practice App, a project designed to explore and practice with various web development tools and technologies, including PHP, JavaScript, Hack, and CSS. This application is hosted on Microsoft Azure and serves as a sandbox for experimenting with backend and frontend technologies in the cloud.

Note: This is a recreational project and not intended for production. It is built purely for learning purposes and improving skills in web development.

💻 Project Overview
This project is a basic web application that demonstrates:

🌟 Dynamic Backend with PHP and Hack: Explore server-side rendering and logic using PHP and Hack.
🌟 Interactive Frontend with JavaScript: Add interactivity and dynamic functionality to the user interface.
🌟 Styling with CSS: Design responsive and visually appealing user interfaces.
🌟 Cloud Hosting with Azure: Learn how to deploy and manage applications on the Microsoft Azure cloud platform.
The app is designed to help improve understanding of:

Web development architecture (frontend + backend).
Deployment processes on cloud platforms.
Debugging and error handling in PHP and JavaScript.
Enhancing designs with modern CSS techniques.

🔧 Tools & Technologies
This app uses the following tools and technologies:

Tool/Technology	Purpose
PHP	Backend logic and server-side rendering.
Hack	Enhancing PHP with static typing and improved performance.
JavaScript	Adding interactivity and frontend functionality.
CSS	Styling and responsive design.
Microsoft Azure	Cloud hosting and deployment.
🎯 Objectives
Personal Growth: Enhance skills in using PHP, Hack, JavaScript, and CSS in real-world scenarios.
Cloud Exploration: Gain hands-on experience deploying and managing apps in Azure.
Tool Familiarity: Understand the strengths and capabilities of different tools and frameworks.
Code Experimentation: Provide a safe environment to experiment with new coding techniques and practices.
🚀 How to Run the App Locally
Prerequisites
PHP installed (minimum version 7.4).
Hack installed and set up on your system.
A modern web browser (e.g., Chrome, Firefox, Edge).
Azure CLI installed if you wish to redeploy to the cloud.
Steps
Clone the repository:

bash
Copiar
Editar
git clone https://github.com/yourusername/personal-practice-app.git
Navigate to the project folder:

bash
Copiar
Editar
cd personal-practice-app
Start a local PHP server:

bash
Copiar
Editar
php -S localhost:8000
Open the app in your browser:

arduino
Copiar
Editar
http://localhost:8000
To test the Hack files, run:

bash
Copiar
Editar
hhvm index.hack
📂 Project Structure
plaintext
Copiar
Editar
personal-practice-app/
├── assets/
│   ├── css/          # CSS files for styling
│   ├── js/           # JavaScript files for interactivity
│   ├── images/       # Images and icons
├── azure/            # Azure configuration files
├── index.php         # Entry point for the application
├── index.hack        # Hack version of the main logic
├── README.md         # Project documentation
└── LICENSE           # License for the project
🌩 Deployment on Microsoft Azure
Steps to Deploy on Azure
Login to your Azure account:

bash
Copiar
Editar
az login
Create a new resource group and App Service:

bash
Copiar
Editar
az group create --name PracticeAppGroup --location "East US"
az appservice plan create --name PracticeAppPlan --resource-group PracticeAppGroup --sku FREE
Deploy the application:

bash
Copiar
Editar
az webapp up --name personal-practice-app --resource-group PracticeAppGroup --runtime "PHP|8.0"
Access the live app:

arduino
Copiar
Editar
https://personal-practice-app.azurewebsites.net
🖼 Screenshots
Homepage	Features Page
🔥 Challenges Faced
PHP and Hack Integration:
Managing compatibility between Hack and PHP runtime environments.
Azure Deployment:
Understanding the deployment pipeline and configuring Azure App Services.
Offline Debugging:
Debugging JavaScript and CSS styles for cross-browser compatibility.
📄 License
This project is licensed under the MIT License.

🙏 Acknowledgments
Special thanks to:

PHP for making backend development enjoyable.
Hack for introducing type safety to PHP.
JavaScript and CSS for powering the frontend.
Azure for enabling seamless cloud hosting.
📢 Disclaimer
This project is for personal practice only. It is not optimized for production use, and no sensitive or real data should be handled within this application.
