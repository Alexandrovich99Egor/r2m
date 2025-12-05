const inputFile = document.getElementById('#user-avatar-upload');

inputFile.addEventListener('change', async (e) => {
    const selectedFile = event.target.files[0];

    e.preventDefault();

    if (!selectedFile) return;


    const formData = new FormData();
    formData.append('image', selectedFile);

    try {
        const response = await fetch('/upload', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData
        });

        const result = await response.json();
        console.log('Файл загружен:', result);
    } catch (err) {
        console.error('Ошибка загрузки:', err);
    }


});
