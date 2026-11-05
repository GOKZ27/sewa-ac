const photoDialog = document.querySelector('[data-photo-dialog]');
const photoImage = photoDialog?.querySelector('[data-photo-image]');
const photoCaption = photoDialog?.querySelector('[data-photo-caption]');
const photoButtons = Array.from(document.querySelectorAll('[data-lightbox-src]'));
let activePhotoIndex = 0;

function showPhoto(index) {
    if (!photoDialog || !photoImage || photoButtons.length === 0) {
        return;
    }

    activePhotoIndex = (index + photoButtons.length) % photoButtons.length;

    const activeButton = photoButtons[activePhotoIndex];
    const source = activeButton.dataset.lightboxSrc;
    const description = activeButton.dataset.lightboxAlt ?? '';

    if (!source) {
        return;
    }

    photoImage.src = source;
    photoImage.alt = description;
    photoCaption.textContent = description;

    if (!photoDialog.open) {
        photoDialog.showModal();
    }
}

photoButtons.forEach((button, index) => {
    button.addEventListener('click', () => showPhoto(index));
});

photoDialog?.querySelector('[data-photo-close]')?.addEventListener('click', () => {
    photoDialog.close();
});

photoDialog?.querySelector('[data-photo-previous]')?.addEventListener('click', () => {
    showPhoto(activePhotoIndex - 1);
});

photoDialog?.querySelector('[data-photo-next]')?.addEventListener('click', () => {
    showPhoto(activePhotoIndex + 1);
});

photoDialog?.addEventListener('click', (event) => {
    if (event.target === photoDialog) {
        photoDialog.close();
    }
});

photoDialog?.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowLeft') {
        showPhoto(activePhotoIndex - 1);
    }

    if (event.key === 'ArrowRight') {
        showPhoto(activePhotoIndex + 1);
    }
});

const videoDialog = document.querySelector('[data-video-dialog]');
const videoPlayer = videoDialog?.querySelector('[data-video-player]');

document.querySelectorAll('[data-video-src]').forEach((button) => {
    button.addEventListener('click', () => {
        const source = button.dataset.videoSrc;

        if (!videoDialog || !videoPlayer || !source) {
            return;
        }

        videoPlayer.poster = button.dataset.videoPoster ?? '';
        videoPlayer.src = source;
        videoDialog.showModal();
        videoPlayer.load();
        videoPlayer.play().catch((error) => {
            console.warn('Video playback did not start automatically.', error);
        });
    });
});

function stopVideo() {
    if (!videoDialog || !videoPlayer) {
        return;
    }

    videoPlayer.pause();
    videoPlayer.removeAttribute('src');
    videoPlayer.removeAttribute('poster');
    videoPlayer.load();
}

videoDialog?.querySelector('[data-video-close]')?.addEventListener('click', () => {
    videoDialog.close();
});

videoDialog?.addEventListener('close', stopVideo);
videoDialog?.addEventListener('click', (event) => {
    if (event.target === videoDialog) {
        videoDialog.close();
    }
});

document.querySelectorAll('header details a[href^="#"]').forEach((link) => {
    link.addEventListener('click', () => {
        link.closest('details')?.removeAttribute('open');
    });
});
