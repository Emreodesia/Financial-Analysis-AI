<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Analiz Chat - Finansal Çözümler</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Heroicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/heroicons@2.0.18/24/outline/index.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .chat-container {
            height: calc(100vh - 200px);
        }
        .message-bubble {
            max-width: 80%;
            word-wrap: break-word;
        }
        .message-user {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-bottom-right-radius: 0.25rem;
        }
        .message-ai {
            background-color: #f3f4f6;
            color: #1f2937;
            border-bottom-left-radius: 0.25rem;
        }
        .typing-indicator {
            display: none;
        }
        .typing-indicator.show {
            display: flex;
        }
        .typing-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #9ca3af;
            animation: typing 1.4s infinite ease-in-out;
        }
        .typing-dot:nth-child(1) { animation-delay: -0.32s; }
        .typing-dot:nth-child(2) { animation-delay: -0.16s; }
        @keyframes typing {
            0%, 80%, 100% { transform: scale(0); }
            40% { transform: scale(1); }
        }
        .file-upload-area {
            border: 2px dashed #d1d5db;
            transition: all 0.3s ease;
        }
        .file-upload-area:hover {
            border-color: #667eea;
            background-color: #f8fafc;
        }
        .file-upload-area.dragover {
            border-color: #667eea;
            background-color: #eff6ff;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-gray-900">
                        Finansal Çözümler
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('analysis.index') }}" class="text-blue-600 hover:text-blue-700 transition-colors">
                        ← Analiz Sayfasına Dön
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Chat Header -->
    <div class="bg-white border-b">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">AI Finansal Analiz</h1>
                    <p class="text-gray-600">Şirketinizi analiz etmek için AI ile sohbet edin</p>
                </div>
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span>AI Aktif</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Chat Container -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Chat Messages -->
            <div id="chat-messages" class="chat-container overflow-y-auto p-6 space-y-4">
                <!-- Welcome Message -->
                <div class="flex justify-start">
                    <div class="message-bubble message-ai p-4 rounded-lg">
                        <div class="flex items-center space-x-2 mb-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-900">AI Asistan</span>
                        </div>
                        <p class="text-gray-700">
                            Merhaba! Ben finansal analiz AI asistanınız. Şirketiniz hakkında sorular sorabilir, raporlarınızı yükleyebilir ve detaylı analizler alabilirsiniz. 
                            <br><br>
                            Size nasıl yardımcı olabilirim?
                        </p>
                    </div>
                </div>

                <!-- Typing Indicator -->
                <div id="typing-indicator" class="flex justify-start typing-indicator">
                    <div class="message-bubble message-ai p-4 rounded-lg">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div class="flex space-x-1">
                                <div class="typing-dot"></div>
                                <div class="typing-dot"></div>
                                <div class="typing-dot"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- File Upload Area -->
            <div id="file-upload-area" class="border-t border-gray-200 p-4">
                <div class="file-upload-area rounded-lg p-4 text-center cursor-pointer" onclick="document.getElementById('file-input').click()">
                    <svg class="w-12 h-12 mx-auto text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                    </svg>
                    <p class="text-gray-600">Rapor yüklemek için tıklayın veya sürükleyin</p>
                    <p class="text-sm text-gray-400 mt-1">PDF, DOC, DOCX, TXT (Max 10MB)</p>
                </div>
                <input type="file" id="file-input" class="hidden" accept=".pdf,.doc,.docx,.txt">
            </div>

            <!-- Message Input -->
            <div class="border-t border-gray-200 p-4">
                <form id="message-form" class="flex space-x-4">
                    <div class="flex-1">
                        <textarea id="message-input" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                            placeholder="Mesajınızı yazın..."
                            rows="1"></textarea>
                    </div>
                    <button type="submit" 
                        class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-blue-600 hover:to-purple-700 transition-all duration-200 flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        <span>Gönder</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const chatMessages = document.getElementById('chat-messages');
        const messageForm = document.getElementById('message-form');
        const messageInput = document.getElementById('message-input');
        const typingIndicator = document.getElementById('typing-indicator');
        const fileInput = document.getElementById('file-input');
        const fileUploadArea = document.querySelector('.file-upload-area');

        let selectedFile = null;

        // Auto-resize textarea
        messageInput.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });

        // File upload handling
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                selectedFile = file;
                showFilePreview(file);
            }
        });

        // Drag and drop
        fileUploadArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('dragover');
        });

        fileUploadArea.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.classList.remove('dragover');
        });

        fileUploadArea.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('dragover');
            const file = e.dataTransfer.files[0];
            if (file) {
                selectedFile = file;
                fileInput.files = e.dataTransfer.files;
                showFilePreview(file);
            }
        });

        function showFilePreview(file) {
            const fileInfo = document.createElement('div');
            fileInfo.className = 'bg-blue-50 border border-blue-200 rounded-lg p-3 mb-4';
            fileInfo.innerHTML = `
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="text-blue-700 font-medium">${file.name}</span>
                    </div>
                    <button onclick="removeFile()" class="text-red-500 hover:text-red-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            `;
            fileUploadArea.parentNode.insertBefore(fileInfo, fileUploadArea);
        }

        function removeFile() {
            selectedFile = null;
            fileInput.value = '';
            const fileInfo = document.querySelector('.bg-blue-50');
            if (fileInfo) {
                fileInfo.remove();
            }
        }

        // Message form handling
        messageForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const message = messageInput.value.trim();
            if (!message) return;

            // Add user message
            addMessage(message, 'user');
            messageInput.value = '';
            messageInput.style.height = 'auto';

            // Show typing indicator
            typingIndicator.classList.add('show');

            // Prepare form data
            const formData = new FormData();
            formData.append('message', message);
            if (selectedFile) {
                formData.append('file', selectedFile);
            }

            try {
                const response = await fetch('{{ route("analysis.message") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: formData
                });

                const data = await response.json();

                // Hide typing indicator
                typingIndicator.classList.remove('show');

                if (data.success) {
                    addMessage(data.message, 'ai');
                } else {
                    addMessage(data.message || 'Üzgünüm, bir hata oluştu. Lütfen tekrar deneyin.', 'ai');
                }

                // Remove file after sending
                if (selectedFile) {
                    removeFile();
                }

            } catch (error) {
                console.error('Error:', error);
                typingIndicator.classList.remove('show');
                addMessage('Bağlantı hatası oluştu. Lütfen tekrar deneyin. Hata: ' + error.message, 'ai');
            }
        });

        function addMessage(text, sender) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `flex ${sender === 'user' ? 'justify-end' : 'justify-start'}`;
            
            const messageClass = sender === 'user' ? 'message-bubble message-user' : 'message-bubble message-ai';
            
            let icon = '';
            if (sender === 'ai') {
                icon = `
                    <div class="flex items-center space-x-2 mb-2">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <span class="font-semibold text-gray-900">AI Asistan</span>
                    </div>
                `;
            }

            messageDiv.innerHTML = `
                <div class="${messageClass} p-4 rounded-lg">
                    ${icon}
                    <p class="${sender === 'user' ? 'text-white' : 'text-gray-700'}">${text}</p>
                </div>
            `;

            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    </script>
</body>
</html> 