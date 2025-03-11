<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiosk Menu</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url(Image_source/background_pastil.png);
            background-size: auto;
            background-position: center;
            background-repeat: no-repeat;
        }
        .kiosk {
            width: 90%;
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 10px;
            background: rgb(12, 61, 19);
            width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow:0 10px 30px #f1c40f;
        }
        .top-section{
            border: solid 3px rgba(156, 91, 29, 0.678);
            background-color: #dfe6d2;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 10px;
            padding: 10px;
        }

        .top-section h2{
            margin: 0;
            color: #004d00;
            font-weight: bold;
        }

        .top-section{
            display: flex;
            gap: 10px;
        }

        .top-section button {   
            background-color: #0c3d13;
            border: solid black 2px;
            width: 120px;
            height: 50px;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            align-items: center;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3 ease;
        }

        .top-section button:hover{
            background-color:  #137c24; 
            border-color: #f1c40f;    
            box-shadow: 0 0 10px #f1c40f;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        .item {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #fff;
            text-align: center;
            border: 2px solid black;
        }

        .item-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            align-items: center;
            background-color: #0c3d13;
            color: white;
            font-weight: bold;
            padding: 8px;
            border-radius: 20px;
            box-shadow: inset 0 0 5px #000;
            margin: 15px auto;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .item-label:hover{
            background-color: #137c24;
            transform: scale(1.05);
        }
        
        .item-name {
            font-size: 12px;
            align-items: center;
        }

        .item-price { 
            font-size: 12px;
            margin-top: 5px;
            align-items: center;
        }

        .item img {
            width: 100%;
            height: 100px;
            border-radius: 5px;
            object-fit: cover;
        }
        .order {
            margin-top: 20px;
        }
        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 5px 0;
        }
        .order-item button {
            padding: 5px;
            margin: 0 5px;
            cursor: pointer;
        }
        .category-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }

        .category-buttons img {
            width: 70px; /* Adjust the size as needed */
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #004d00; /* Dark green border */
            padding: 5px;
            background-color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .category-buttons img:hover {
            transform: scale(1.1);
            box-shadow: 0 0 10px #f1c40f; /* Golden glow effect */
        }

        h2 {
            padding-top: 0px;
            margin-top: 0px;
            color: white;
            display: block;
            font-size: 1.5em;
            font-weight: bold;
            unicode-bidi: isolate;
}
        p {
            color: white;
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            unicode-bidi: isolate;
            font-style: italic;
        }

        button{
            display: inline-block;
            text-align: center;
            cursor:  pointer;
            height: 50px;
            width: 150px;
            background-color: white;
            font-family: Arial, Helvetica, sans-serif;
            border: solid 2px black;
            font-weight: bolder;
            border-radius: 50px;
            transform: 0.75s ease, box-shadow 0.5s ease;
        }

        button:hover{
            background-color: #0c5318;
            color: white;
            transform: scale(1.1);
            box-shadow: 0 0 10px #f1c40f;
        }

        .modal {
            display: none; /* Nakatago by default */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 400px;
            margin: 10% auto;
            text-align: center;
            box-shadow: 0 0 10px #f1c40f;
        }

        .close-btn {
              float: right;
             font-size: 24px;
             cursor: pointer;
        }

        .close-btn:hover {
            color: red;
        }
    </style>
</head>
<body>

    <div class="kiosk">
        <div class="top-section">
            <h2>Welcome, <br><span style="color: #008000; font-weight: bold;">OUR DEAR CUSTOMER</span></h2>
            <button id="">View Order</button>
            <button>🏠</button>
        </div> 

        <p>Choose category to explore the menu</p>
        <div class="category-buttons">
            <img src="Image_source/toppings.jpg" onclick="showCategory('toppings')" alt="Toppings" width="50">
            <img src="Image_source/viands.jpg" onclick="showCategory('viands')" alt="Viands" width="50">
            <img src="Image_source/addons.jpg" onclick="showCategory('addons')" alt="Add-ons" width="50">
            <img src="Image_source/drinks.jpg" onclick="showCategory('drinks')" alt="Drinks" width="50">
        </div>
        <div class="menu" id="menu-container">
            <!-- Items will be displayed here dynamically -->
        </div>
        <div id="order-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">X</span>
            <h2>View Order</h2>
            <ul id="modal-order-list"></ul>
            <p>Total: ₱<span id="modal-total-price">0.00</span></p>
            <button onclick="submitOrder()">Review + Pay For Order</button>
        </div>
    </div>
    <script>
        let orders = {};
        let totalPrice = 0;
        
        const menuItems = {
            toppings: [
                { name: 'Cheyk-in', price: 10.00, img: 'Image_source/chicken_pastil.jpg' },
                { name: 'Spy See Cheyk-In', price: 10.00, img: 'Image_source/spicychicken_pastil.jpg' },
                { name: 'Cheyk-in Khar ey', price: 10.00, img: 'Image_source/curry_pastil.jpg'},
                { name: 'Cheyk-in Adee-boo', price: 10.00, img: 'Image_source/adobo_pastil.jpg' }
            ],
            addons: [
                { name: 'Taylong', price: 0.00, img: 'Image_source/talong.jpg' },
                { name: 'Alawmung', price: 0.00, img: 'Image_source/alamang.jpg' },
                { name: 'Soap', price: 0.00, img: 'Image_source/soup.jpg' },
                { name: 'Chilley-owel', price: 0.00, img: 'Image_source/chili_oil.jpg' }
            ],
            viands: [
                { name: 'Freight Cheyk-In', price: 25.00, img: 'Image_source/fried_chicken.jpg' },
                { name: 'Gurrlick Cheyk-In', price: 25.00, img: 'Image_source/garlic_fried_chicken.jpg' },
                { name: 'Shenghey', price: 5.00, img: 'Image_source/shanghai.jpg' },
                { name: 'Shoemey', price: 5.00, img: 'Image_source/siomai.jpg' }
            ],
            drinks: [
                { name: 'Peepsey', price: 15.00, img: 'Image_source/pepsi.jpg' },
                { name: 'Rawyal', price: 15.00, img: 'Image_source/royal.jpg' },
                { name: 'Cock', price: 15.00, img: 'Image_source/coke.jpg' },
                { name: 'Streight', price: 15.00, img: 'Image_source/sprite.jpg' }
            ]
        };
        
        function showCategory(category) {
            const menuContainer = document.getElementById("menu-container");
            menuContainer.innerHTML = "";

            menuItems[category].forEach(item => {
                const div = document.createElement("div");
                
                div.className = "item";
                
                div.onclick = () => addToOrder(item.name, item.price);
                
                div.innerHTML = `
                    <img src="${item.img}" alt="${item.name}">
                    <div class="item-label">
                         <span class="item-name">${item.name}</span>
                        <span class="item-price">₱${item.price.toFixed(2)}</span>
                    </div>
                `;

                menuContainer.appendChild(div);
            });
        }
        
        function addToOrder(item, price) {
            if (!orders[item]) {
                orders[item] = { quantity: 1, price };
            } else {
                orders[item].quantity++;
            }
            updateOrderList();
        }

        function updateOrderList() {
            const orderList = document.getElementById("order-list");
            orderList.innerHTML = "";
            totalPrice = 0;
            for (let item in orders) {
                const listItem = document.createElement("li");
                listItem.className = "order-item";
                totalPrice += orders[item].quantity * orders[item].price;
                listItem.innerHTML = `
                    ${item} - ₱${orders[item].price.toFixed(2)} x 
                    <button onclick="changeQuantity('${item}', -1)">-</button>
                    ${orders[item].quantity}
                    <button onclick="changeQuantity('${item}', 1)">+</button>
                `;
                orderList.appendChild(listItem);
            }
            document.getElementById("total-price").textContent = totalPrice.toFixed(2);
        }

        function changeQuantity(item, amount) {
            if (orders[item]) {
                orders[item].quantity += amount;
                if (orders[item].quantity <= 0) {
                    delete orders[item];
                }
                updateOrderList();
            }
        }

        function submitOrder() {
            alert("Order submitted! Total: ₱" + totalPrice.toFixed(2));
        }

        document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("order-modal");
        const viewOrderBtn = document.querySelector(".top-section button");
        const closeBtn = document.querySelector(".close-btn");

        viewOrderBtn.addEventListener("click", function () {
            updateModalOrderList();
            modal.style.display = "block";
        });

        closeBtn.addEventListener("click", function () {
            modal.style.display = "none";
         });

        window.addEventListener("click", function (event) {
            if (event.target === modal) {
            modal.style.display = "none";
            }
        });
        });

        function updateModalOrderList() {
            const modalOrderList = document.getElementById("modal-order-list");
            modalOrderList.innerHTML = "";
            let modalTotalPrice = 0;

            for (let item in orders) {
                const listItem = document.createElement("li");
                modalTotalPrice += orders[item].quantity * orders[item].price;
                listItem.innerHTML = `${item} - ₱${orders[item].price.toFixed(2)} x ${orders[item].quantity}`;
                modalOrderList.appendChild(listItem);
            }

        document.getElementById("modal-total-price").textContent = modalTotalPrice.toFixed(2);
        }    
    </script>
</body>
</html>
