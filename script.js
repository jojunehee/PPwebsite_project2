document.addEventListener("DOMContentLoaded", function () {
    const postList = document.getElementById("post-list");
    const postInput = document.getElementById("post-input");
    const addPostButton = document.getElementById("add-post-button");

    addPostButton.addEventListener("click", function () {
        const postText = postInput.value.trim();
        if (postText) {
            const li = document.createElement("li");
            li.innerHTML = `
                ${postText}
                <button class="edit-button">수정</button>
            `;
            postList.appendChild(li);
            postInput.value = "";
        }
    });

    postList.addEventListener("click", function (e) {
        if (e.target.classList.contains("edit-button")) {
            const li = e.target.parentElement;
            const postText = li.firstChild.textContent;

            // 수정 여부를 물어봅니다.
            const shouldEdit = confirm("수정하시겠습니까?\n\n수정할 내용: " + postText);

            if (shouldEdit) {
                const updatedText = prompt("수정할 내용을 입력하세요:", postText);
                if (updatedText !== null) {
                    li.firstChild.textContent = updatedText;
                }
            }
        }
    });
});
