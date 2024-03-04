const container= document.getElementById("container")

fetch('index.php')
.then(response => response.json())
.then(data => {
    data.forEach(post => {
        const title = document.createElement('li');
        title.textContent = post.title;
        container.appendChild(title);
    });
})
.catch(error => console.error(error));