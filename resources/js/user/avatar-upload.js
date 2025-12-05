function uploadAvatar() {
    const inputFile = document.getElementById('user-avatar-upload');

    if (!inputFile) return;

    inputFile.addEventListener('change', async (e) => {
        const selectedFile = e.target.files[0];

        e.preventDefault();

        if (!selectedFile) return;


        const formData = new FormData();
        formData.append('avatar', selectedFile);

        try {
            const response = await fetch('/user-upload-avatar', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            });

            const result = await response;
            console.log(result);
        } catch (err) {
            console.error(err);
        }


    });
}

document.addEventListener('DOMContentLoaded', uploadAvatar);


