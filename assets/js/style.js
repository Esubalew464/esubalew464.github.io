let viewCount = 0;
let likeCount = 0;
let comments = [];

function likePost(button) {
    likeCount++;
    document.getElementById('like-count').innerText = likeCount;
    button.innerHTML = `<i class="fas fa-thumbs-up"></i> <span id="like-count">${likeCount}</span> Likes`;
    button.disabled = true;
}

function toggleComments() {
    const commentsSection = document.querySelector('.comments');
    commentsSection.style.display = commentsSection.style.display === 'none' ? 'block' : 'none';
}

function postComment() {
    const commentInput = document.getElementById('comment-input');
    const commentText = commentInput.value;

    if (commentText.trim() !== '') {
        comments.push(commentText);
        displayComments();
        commentInput.value = ''; // Clear the input field after posting a comment
    }
}

function displayComments() {
    const commentSection = document.getElementById('comment-section');
    commentSection.innerHTML = '';

    comments.forEach(comment => {
        const commentElement = document.createElement('div');
        commentElement.classList.add('comment');
        commentElement.innerText = comment;
        commentSection.appendChild(commentElement);
    });
}

function incrementViewCount() {
    viewCount++;
    document.getElementById('view-count').innerText = viewCount;
}

// Increment view count when the page loads
window.onload = function () {
    incrementViewCount();
};
