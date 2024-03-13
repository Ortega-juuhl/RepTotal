function showMuscleGroupList() {
    var x = document.querySelector(".musclegroup-list");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    event.preventDefault();
}
