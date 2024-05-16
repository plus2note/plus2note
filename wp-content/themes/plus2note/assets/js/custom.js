// Function to fetch and display YouTube videos based on a search query
function fetchAndDisplayYouTubeVideos(query) {
  // Replace 'YOUR_API_KEY' with your actual API key
  const apiKey = "AIzaSyCDFHg4sd08HqLUDggj2tiJPTaXzwQPgWQ";
  const apiUrl = "https://www.googleapis.com/youtube/v3/search";

  // Fetch videos from YouTube based on the search query
  fetch(
    `${apiUrl}?part=snippet&type=video&q=${encodeURIComponent(
      query
    )}&maxResults=10&key=${apiKey}`
  )
    .then((response) => response.json())
    .then((data) => {
      if (data.items && data.items.length > 0) {
        const videos = data.items;
        const videoSection = document.createElement("div");
        videoSection.classList.add("video-section");

        const heading = document.createElement("h2");
        heading.textContent = `YouTube Videos for "${query}"`;
        videoSection.appendChild(heading);

        const videoList = document.createElement("div");
        videoList.classList.add("video-list");

        videos.forEach((video) => {
          const videoId = video.id.videoId;
          const title = video.snippet.title;
          const thumbnailUrl = video.snippet.thumbnails.default.url;

          const videoItem = document.createElement("div");
          videoItem.classList.add("video-item");

          // Customize the iframe size and autoplay
          const iframe = document.createElement("iframe");
          iframe.width = "240";
          iframe.height = "426";
          iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
          iframe.setAttribute("allowfullscreen", "");
          // iframe.setAttribute("allow", "autoplay; encrypted-media");
          iframe.setAttribute("title", title);

          videoItem.appendChild(iframe);
          videoList.appendChild(videoItem);
        });

        videoSection.appendChild(videoList);

        // Append the video section to a container in your WordPress theme
        document
          .querySelector(".plus2note-youtube-videos")
          .appendChild(videoSection);
      } else {
        console.error("No videos found");
      }
    })
    .catch((error) => {
      console.error("Error fetching videos:", error);
    });
}

// Call the function to fetch and display YouTube videos based on the search query
fetchAndDisplayYouTubeVideos("plus2note");

document.addEventListener("DOMContentLoaded", function () {
  var menuToggle = document.getElementById("menu-toggle");
  var menuList = document.querySelector("#custom-menu ul");
  menuToggle.addEventListener("click", function () {
    menuList.classList.toggle("open");
    menuToggle.classList.toggle("on");
    console.log("hello");
    console.log(menuToggle);
  });
});
