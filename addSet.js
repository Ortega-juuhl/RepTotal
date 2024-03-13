document.addEventListener('DOMContentLoaded', function () {
    var setsContainer = document.getElementById('sets-container');

    function createSetContainer(exerciseNameValue) {
        var setContainer = document.createElement('div');
        setContainer.className = 'set-container';

        var exerciseName = document.createElement('p');
        exerciseName.textContent = exerciseNameValue;
        setContainer.appendChild(exerciseName);

        return setContainer;
    }

    function createInput(type, placeholder) {
        var input = document.createElement('input');
        input.type = type;
        input.placeholder = placeholder;
        return input;
    }

    function addSet(setContainer) {
        var setTextbox = createInput('text', 'Enter set...');
        var noteTextBox = createInput('text', 'Notes');
        var removeSetBtn = createButton('Remove Set', 'remove-set-btn', function () {
            setContainer.removeChild(setTextbox);
            setContainer.removeChild(noteTextBox);
            setContainer.removeChild(removeSetBtn);
        });

        setContainer.appendChild(setTextbox);
        setContainer.appendChild(noteTextBox);
        setContainer.appendChild(removeSetBtn);
    }

    function createSet(exerciseNameValue) {
        var setContainer = createSetContainer(exerciseNameValue);
        var textbox = createInput('text', 'Notes');
        var addSetBtn = createButton('Add Set', 'add-set-btn', function () {
            addSet(setContainer);
        });
        var xBtn = createButton('Remove exercise', 'remove-exercise-btn', function () {
            setsContainer.removeChild(setContainer);
        });

        setContainer.appendChild(textbox);
        setContainer.appendChild(addSetBtn);
        setContainer.appendChild(xBtn);
        setsContainer.appendChild(setContainer);
    }

    function createButton(text, className, clickHandler) {
        var button = document.createElement('button');
        button.textContent = text;
        button.className = className;
        button.addEventListener('click', clickHandler);
        return button;
    }

    function attachEventListenersToExerciseButtons() {
        var exerciseButtons = document.querySelectorAll('.exercise-btn');

        exerciseButtons.forEach(function (button) {
            button.addEventListener('click', function handleClick() {
                button.removeEventListener('click', handleClick);
                createSet(button.getAttribute('data-exercise-name'));
            });
        });
    }

    attachEventListenersToExerciseButtons();
});
