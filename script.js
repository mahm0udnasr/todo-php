"use strict";

document.addEventListener("DOMContentLoaded", function () {
  const todoListItem = document.querySelector(".todo-list");
  const todoListInput = document.querySelector(".todo-list-input");
  const addButton = document.querySelector(".todo-list-add-btn");

  if (addButton) {
    addButton.addEventListener("click", function (event) {
      event.preventDefault();

      const item = todoListInput.value;

      if (item) {
        const li = document.createElement("li");
        li.innerHTML = `
                    <div class='form-check'>
                        <label class='form-check-label'>
                            <input class='checkbox' type='checkbox'/>
                            ${item}
                            <i class='input-helper'></i>
                        </label>
                    </div>
                    <i class='remove mdi mdi-close-circle-outline'></i>
                `;
        todoListItem.appendChild(li);
        todoListInput.value = "";
      }
    });
  }

  if (todoListItem) {
    // Handle checkbox changes
    todoListItem.addEventListener("change", function (event) {
      if (event.target.classList.contains("checkbox")) {
        const checkbox = event.target;
        if (checkbox.hasAttribute("checked")) {
          checkbox.removeAttribute("checked");
        } else {
          checkbox.setAttribute("checked", "checked");
        }
        checkbox.closest("li").classList.toggle("completed");
      }
    });

    // Handle remove button clicks
    todoListItem.addEventListener("click", function (event) {
      if (event.target.classList.contains("remove")) {
        event.target.parentElement.remove();
      }
    });
  }
});
