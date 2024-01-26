document.getElementById('upload').addEventListener('change', handleUpload);

        function handleUpload(event) {
            const files = event.target.files;
            const previewDiv = document.getElementById('preview');

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function (event) {
                    const img = document.createElement('img');
                    img.classList.add('preview-image'); // Adiciona a classe 'preview-image'
                    img.src = event.target.result;
                    previewDiv.appendChild(img);
                }

                reader.readAsDataURL(file);
            }
        }