<img width="1351" height="630" alt="11" src="https://github.com/user-attachments/assets/02676f1c-3d32-418c-ac2c-866d1eecf84b" />

<img width="873" height="573" alt="2" src="https://github.com/user-attachments/assets/02ee2a9f-983a-4731-800f-5d0de4368234" />


<img width="622" height="643" alt="3" src="https://github.com/user-attachments/assets/c206efd4-4439-46b6-872f-fff429250919" />




Financial Solutions – AI-Powered Analysis Platform
A modern and user-friendly financial analysis platform offering AI-powered company analysis and financial recommendations.

Features
🚀 Modern Design: Responsive and sleek interface built with Tailwind CSS

🤖 AI-Powered Analysis: Company analysis using Google Gemini Pro

📊 Report Upload: Supports PDF, DOC, DOCX, and TXT file formats

💬 Real-Time Chat: Interactive chat with AI assistant

🔒 Secure API: API keys are securely stored in the backend

📱 Mobile Compatible: Seamless experience on all devices

Installation
Requirements
PHP 8.1+

Composer

Node.js & NPM

MySQL/PostgreSQL

Steps
Clone the project


git clone <repository-url>
cd laravel-12.x
Install dependencies


composer install
npm install
Create the environment file


cp .env.example .env
Generate the application key



php artisan key:generate
Configure the database


# Update database details in the .env file
php artisan migrate
Add your Gemini API Key


# Add your Gemini API key to the .env file
GEMINI_API_KEY=your_gemini_api_key_here
Run the application


php artisan serve
npm run dev
Usage
AI Analysis Page
Navigate to /analiz

Enter your company information

You will be redirected to the chat page

Upload your reports and chat with the AI

Features
Personal Info: Name, age, position

Company Info: Company name, industry, size

File Upload: Upload your reports

AI Chat: Receive financial insights

API Endpoints
GET /analiz – Analysis main page

POST /analiz/bilgiler – Submit user data

GET /analiz/chat – Chat page

POST /analiz/message – Send message to AI

Security
API keys stored securely in .env

CSRF protection enabled

Secure file upload mechanisms

Input validation enforced

Technologies
Backend: Laravel 12.x

Frontend: Tailwind CSS, JavaScript

AI: Google Gemini Pro API

Database: MySQL/PostgreSQL

Icons: Heroicons, Boxicons

Contributing
Fork the repository

Create a feature branch (git checkout -b feature/amazing-feature)

Commit your changes (git commit -m 'Add amazing feature')

Push to the branch (git push origin feature/amazing-feature)

Create a Pull Request



License
This project is licensed under the MIT License.

Note: Don't forget to add your Gemini API key to the .env file. AI features will not work without it.
