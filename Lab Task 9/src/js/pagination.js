const list_items = [
    "Item 1",
    "Item 2",
    "Item 3",
    "Item 4",
    "Item 5",
    "Item 6",
    "Item 7",
    "Item 8",
    "Item 9",
  ];
  
  const list_element = document.getElementById("list");
  const pagination_element = document.getElementById("pagination");
  
  let current_page = 1;
  let rows = 3;
  
  function displayList(items, wrapper, rows_per_page, page) {
    wrapper.innerHTML = "";
    page--;
  
    let start = rows_per_page * page;
    let end = start + rows_per_page;
  
    let paginatedItems = items.slice(start, end);
    console.log(paginatedItems);
  
    for (let i = 0; i < paginatedItems.length; i++) {
      //console.log(items[i]);
      let item = paginatedItems[i];
  
      let item_element = document.createElement("div");
      item_element.classList.add("item");
      item_element.innerText = item;
  
      wrapper.appendChild(item_element);
    }
  }
  
  function setupPagination(items, wrapper, rows_per_page) {
    wrapper.innerHTML = "";
  
    let page_count = Math.ceil(items.length / rows_per_page);
  
    for (let i = 1; i < page_count + 1; i++) {
      let btn = paginationBtn(i, items);
      wrapper.appendChild(btn);
    }
  }
  
  function paginationBtn(page, items) {
    let button = document.createElement("button");
    button.innerText = page;
  
    if (current_page == page) button.classList.add("active");
  
    button.addEventListener("click", function () {
      current_page = page;
      displayList(items, list_element, rows, current_page);
  
      let current_btn = document.querySelector(".pagenumbers button.active");
      current_btn.classList.remove("active");
  
      button.classList.add("active");
    });
  
    return button;
  }
  
  displayList(list_items, list_element, rows, current_page);
  
  setupPagination(list_items, pagination_element, rows);
  