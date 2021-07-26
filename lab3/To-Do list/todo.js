let todoListArray = [];

function showTodoList(todoTask) {
    localStorage.setItem('todoListRef', JSON.stringify(todoListArray));

    const todoList = document.querySelector('.js-todolist');

    const currentTask = document.querySelector(`[data-key="${todoTask.id}"]`);
    console.log(currentTask);

    const isTicked = todoTask.ticked ? 'ticked' : '';
    const liNode = document.createElement('li');
    liNode.setAttribute('class', `todo-task ${isTicked}`);
    liNode.setAttribute('data-key', todoTask.id);
    liNode.innerHTML = `
        <input id="${todoTask.id}" type="checkbox" class="input-ticklist js-ticklist"/>
        <label for="${todoTask.id}"></label>
        <span class="todo-task-text">${todoTask.text}</span>
        <button class="delete-todo-task js-delete-todo-task">Delete</button>
    `;
    if (todoTask.ticked) {
        const inputNode = liNode.children[todoTask.id];
        inputNode.setAttribute("checked", "checked");
    }

    if (currentTask) {
        todoList.replaceChild(liNode, currentTask);

    } else {
        todoList.append(liNode);
    }

    if (todoTask.deleted) {
        liNode.remove();
        return
    }
}

function addTodo(text) {
    const todoTask = {
        id: Date.now(),
        text,
        ticked: false,
    };

    todoListArray.push(todoTask);

    showTodoList(todoTask);
}

function toggleTicked(key) {
    const index = todoListArray.findIndex(item => item.id === Number(key));
    console.log(index);
    todoListArray[index].ticked = !todoListArray[index].ticked;
    showTodoList(todoListArray[index]);
}

function deleteTodoTask(key) {
    const index = todoListArray.findIndex(item => item.id === Number(key));
    const delTodo = {
        deleted: true,
        ...todoListArray[index]
    }

    delTodo.deleted = true
    todoListArray = todoListArray.filter(item => item.id !== Number(key));
    showTodoList(delTodo);
}

const todolistForm = document.querySelector('.todolist-form');

todolistForm.addEventListener('submit', event => {

    event.preventDefault();

    const inputTodoListData = document.querySelector('.todolist-input');

    const textData = inputTodoListData.value;

    if (textData != '') {
        addTodo(textData);
        inputTodoListData.value = '';
        inputTodoListData.focus();
    }
});

const todolist = document.querySelector('.js-todolist');

todolist.addEventListener('click', event => {
    if (event.target.classList.contains('js-ticklist')) {
        const todoListKey = event.target.parentElement.dataset.key;
        toggleTicked(todoListKey);
    }

    if (event.target.classList.contains('js-delete-todo-task')) {
        const todoListKey = event.target.parentElement.dataset.key;
        deleteTodoTask(todoListKey);
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const todoListRef = localStorage.getItem('todoListRef');
    if (todoListRef) {
        todoListArray = JSON.parse(todoListRef);
        todoListArray.forEach(todolist => {
            showTodoList(todolist);
        });
    }
});
