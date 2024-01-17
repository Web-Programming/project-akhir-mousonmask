
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Catije</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            background-color: #BAE8DA;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .logo img {
            height: 80px;
        }

        nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        nav a {
            color: black;
            text-decoration: none;
            font-family: 'Moul', regular;
            font-size: 25px;
            font-weight: bold;
            margin: 0 40px;
        }

        nav .active {
            color: red;
        }

        nav a#order {
            display: inline-block;
            background: #DFD7D7;
            mix-blend-mode: multiply;
            line-height: normal;
        }

        nav a#myAccount {
            font-family: 'Moul', regular;
            font-size: 20px;
            font-weight: bold;
            margin-top: -55px;
            margin-right: 5px;
        }

        .menu-container {
            display: flex;
            align-items: flex-start;
            padding: 20px;

        }

        .menu-options {
            margin-bottom: 20px;
            display: flex;
            flex-direction: row;
            align-items: center;

        }

        .menu-options a {
            display: block;
            color: black;
            text-decoration: none;
            font-family: 'Moul', regular;
            font-size: 25px;
            font-weight: bold;
            margin-right: 50px;

        }

        .menu-options a.active {
            color: #468B01;
        }

        .search {
            display: flex;
            background-color: black;
            color: white;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
            margin-left: 50px;
        }

        .search input {
            border: none;
            background: none;
            color: white;
            padding: 0;
            margin: 0;
            font-size: 18px;
        }

        .search img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .menu-list {
            margin-left: 125px;
            display: grid;
            grid-template-columns: repeat(4, 3fr);
            transition: transform 0.5s ease;
        }

        .menu-list.slide-in {
            transform: translateX(0);
        }

        .menu-list.slide-out {
            transform: translateX(-100%);
        }


        .menu-card {
            width: 300px;
            height: 350px;
            margin-top: 100px;
            margin-bottom: 50px;
            background-color: #000;
            border-radius: 20px;
            flex-direction: column;
            transition: color 0.1s;
        }

        .menu-card:hover {
            transform: scale(1.05);
            background-color: #FFE4E4;
            color: black;
        }

        .menu-card img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-top: -100px;
            margin-left: 50px;
            margin-right: 45px;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .menu-card-content {
            color: white;
            margin-left: 40px;
            margin-right: 40px;
            margin-bottom: 10px;
            text-align: center;
            transition: color 0.1s;
        }

        .menu-card-content h3 {
            font-family: 'Barlow';
            font-size: 20px;
        }

        .menu-card-content p {
            margin-top: 10px;
            font-family: 'Barlow';
            font-size: 20px;
        }

        .menu-card:hover .menu-card-content {
            color: black;
        }

        #cart-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 80px;
            height: 80px;
            background-color: #DFD7D7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        #cart-icon img {
            width: 40px;
            height: 40px;
        }

        #add-icon {
            position: fixed;
            bottom: 20px;
            left : 10px;
            width: 80px;
            height: 80px;
            background-color: #DFD7D7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            overflow: hidden;
        }

        #add-icon img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: block; 
        margin: 18px 0 0 20px;
        }   

        .quantity-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
            justify-content: center;
        }

        .quantity-container button {
            background-color: #DFD7D7;
            border: none;
            cursor: pointer;
            margin: 0 5px;
        }

        .menu-card-content button {
            font-family: 'Moul', regular;
            background-color: #DFD7D7;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            display: inline-block;
            font-size: 18px;
            border-radius: 10px;
        }

        .love-icon {
            margin: 5px;
            color: blue;
            transition: color 0.3s ease;
        }

        .love-icon.liked {
            color: red;
        }

        .line{
            position: absolute;
            width: 855px;
            height: 0px;
            left: 24px;
            top: 196px;

            border: 1px solid #000000;
        }

    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/catije.png" alt="Catije Logo" id="logo">
        </div>
        <nav>
            <a href="home">HOME</a>
            <a href="menu" class="nav-link active">MENU</a>
            <a href="about">ABOUT US</a>
            <a href="contact">CONTACT US</a>
            <a href="order" id="order">ORDER YOUR FOOD</a>
            <a href="myacc" id="myAccount">My Account</a>
        </nav>
    </header>

    <div class="menu-container">
        <div class="menu-options" id="menu-options">
            <a href="#" onclick="showMenu('appetizer')">Appetizer</a>
            <a href="#" onclick="showMenu('snack')">Snacks</a>
            <a href="#" onclick="showMenu('alcohol')">Alcohol Drinks</a>
            <a href="#" onclick="showMenu('nonAlcohol')">Non-Alcohol Drinks</a>
            <a href="#" onclick="showMenu('dessert')">Dessert</a>
        </div>

        <div class="line"></div>
        <div class="search">
            <img src="icons/search.png" alt="Search Icon">
            <input type="text" placeholder="Search...">
        </div>

        @foreach ($menus as $item)
</div>
<div class="menu-list" id="menu-list">
    
</div>
@method('add')
@csrf
@can('add', $item)
    <a href="{{ url('menu/create') }}" id="add-icon">
        <img src="icons/add-icon.jpg" alt="Add Menu">
    </a>
@endcan
@endforeach


    <div id="cart-icon" onclick="navigateToOrder()">
        <img src="icons/cart-icon.png" alt="Add to Cart Icon">
    </div> 

    <script>
        const menuData = @json($menus);
        const selectedItems = JSON.parse(localStorage.getItem('wishlist')) || [];

        document.addEventListener('DOMContentLoaded', function () {
            const defaultCategory = 'appetizer';
            showMenu(defaultCategory);
        });

        function showMenu(category) {
            const menuList = document.getElementById('menu-list');
            menuList.innerHTML = '';

            const searchInput = document.querySelector('.search input');
            const searchTerm = searchInput.value.toLowerCase();

            menuData.forEach(item => {
                if (item.category === category && (item.nama_menu.toLowerCase().includes(searchTerm) || searchTerm === '')) {
                    const card = document.createElement('div');
                    card.classList.add('menu-card');

                    const image = document.createElement('img');
                    image.src = item.foto;
                    card.appendChild(image);

                    const content = document.createElement('div');
                    content.classList.add('menu-card-content');

                    const itemName = document.createElement('h3');
                    itemName.textContent = item.nama_menu;
                    content.appendChild(itemName);

                    const itemPrice = document.createElement('p');
                    itemPrice.textContent = `Price: $${item.harga}`;
                    content.appendChild(itemPrice);

                    const quantityContainer = document.createElement('div');
                    quantityContainer.classList.add('quantity-container');

                    const minusButton = document.createElement('button');
                    minusButton.textContent = '-';
                    minusButton.addEventListener('click', function () {
                        updateQuantity(-1, quantityDisplay);
                    });
                    quantityContainer.appendChild(minusButton);

                    const quantityDisplay = document.createElement('span');
                    quantityDisplay.textContent = '0';
                    quantityContainer.appendChild(quantityDisplay);

                    const plusButton = document.createElement('button');
                    plusButton.textContent = '+';
                    plusButton.addEventListener('click', function () {
                        updateQuantity(1, quantityDisplay);
                    });
                    quantityContainer.appendChild(plusButton);

                    content.appendChild(quantityContainer);

                    const addToCartButton = document.createElement('button');
                    addToCartButton.textContent = 'Add to Cart';
                    addToCartButton.addEventListener('click', function () {
                        addToCart(item.nama_menu, item.harga, quantityDisplay.innerText);
                    });
                    content.appendChild(addToCartButton);

                    const addToWishlistButton = document.createElement('i');
                    addToWishlistButton.innerHTML = '<i class="fas fa-heart"></i>';
                    addToWishlistButton.classList.add('love-icon');
                    addToWishlistButton.setAttribute('data-name', item.nama_menu);
                    addToWishlistButton.setAttribute('data-price', item.harga);
                    addToWishlistButton.setAttribute('data-image', item.foto);
                    addToWishlistButton.addEventListener('click', function () {
                        addToWishlist(item.nama_menu, item.harga, item.foto);
                    });
                    content.appendChild(addToWishlistButton);

                    card.appendChild(content);

                    menuList.appendChild(card);
                }
            });
        }

        function updateQuantity(change, display) {
            let quantity = parseInt(display.innerText, 10);
            quantity = Math.max(0, quantity + change);
            display.innerText = quantity;
        }

        function addToCart(itemName, itemPrice, quantity) {
            if (parseInt(quantity, 10) === 0) {
                alert('Please select a quantity greater than 0');
                return;
            }

            const cartItem = {
                name: itemName,
                price: parseFloat(itemPrice.replace('$', '')),
                quantity: parseInt(quantity, 10),
            };

            // Assume you have a global cart array
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(cartItem);
            localStorage.setItem('cart', JSON.stringify(cart));

            alert(`Added to Cart:\n${itemName}\nPrice: ${itemPrice}\nQuantity: ${quantity}`);
        }

        function addToWishlist(itemName, itemPrice, itemImage) {
            const existingItem = selectedItems.find(item => item.name === itemName);

            if (existingItem) {
                // Remove item from wishlist
                const index = selectedItems.indexOf(existingItem);
                selectedItems.splice(index, 1);

                // Update love icons
                const loveIcons = document.querySelectorAll(`.love-icon[data-name="${itemName}"]`);
                loveIcons.forEach(icon => {
                    icon.classList.remove('liked');
                });
            } else {
                // Add item to wishlist
                const wishlistItem = {
                    name: itemName,
                    price: parseFloat(itemPrice.replace('$', '')),
                    image: itemImage,
                    quantity: 1,
                };
                selectedItems.push(wishlistItem);

                // Update love icons
                const loveIcons = document.querySelectorAll(`.love-icon[data-name="${itemName}"]`);
                loveIcons.forEach(icon => {
                    icon.classList.add('liked');
                });
            }

            localStorage.setItem('wishlist', JSON.stringify(selectedItems));
        }

        // Event listener for the search input
        document.querySelector('.search input').addEventListener('input', function () {
            const category = 'snack';
            showMenu(category);
        });

        // Initial setup on DOMContentLoaded
        document.addEventListener('DOMContentLoaded', function () {
            const defaultCategory = 'appetizer';
            showMenu(defaultCategory);

            const menuOptions = document.getElementById('menu-options');
            const activeLink = menuOptions.querySelector(`a[onclick="showMenu('${defaultCategory}')"]`);
            activeLink.classList.add('active');
        });

        // Function to navigate to the order page
        function navigateToOrder() {
            const selectedItemsJSON = JSON.stringify(selectedItems);
            localStorage.setItem('selectedItems', selectedItemsJSON);
            window.location.href = 'order';
        }

        document.addEventListener('DOMContentLoaded', function () {
        const addIcon = document.getElementById('add-icon');

    });
        </script>
</body>
</html>
