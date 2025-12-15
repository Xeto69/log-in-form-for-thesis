const lesson = new URLSearchParams(window.location.search).get("lesson");

if (lesson) {
  localStorage.setItem("python_progress", lesson);

  fetch("backend/save_progress.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      course: "python",
      lesson: lesson
    })
  });
}
