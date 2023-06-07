<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
<link rel='stylesheet' href='https://raw.githubusercontent.com/forsigner/magic-check/master/css/magic-check.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400'>
<link rel='stylesheet' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'><link rel="stylesheet" href="./style.css">
<style>
.search-wrapper {
    display: flex;
    flex-direction: column;
    gap: .25rem;
}

input {
    font-size: 1rem;
}

.user-cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: .25rem;
    margin-top: 1rem;
}

.card {
    border: 1px solid black;
    background-color: white;
    padding: .5rem;
}

.card > .header {
    margin-bottom: .25rem;
}

.card > .body {
    font-size: .8rem;
    color: #777;
}

.hide {
    display: none;
}

</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="logo">
        <span class="big-logo">Sheria Street</span>
        <span class="small-logo">.</span>
    </div>
    <div id="left-menu">
        <ul>
            <li class="active"><a href="#">
                <i class="ion-ios-person-outline"></i>
                <span>Dashboard</span>
            </a></li>
            <li class="has-sub">
                <a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>User Details.</span>
                </a>
                <ul>
                    <li><a href="#">Profile</a></li>

                </ul>
            </li>
            <li><a href="#">
                <i class="ion-ios-albums-outline"></i>
                <span>Messages.</span>
            </a></li>




            <li><a href="#">
                <i class="ion-ios-chatboxes-outline"></i>
                <span>Notifications.</span>
            </a></li>

        </ul>
    </div>
    <div id="main-content">
        <div id="header">
            <div class="header-left float-left">
                <i id="toggle-left-menu" class="ion-android-menu"></i>
            </div>
            <div class="header-right float-right">
                <i class="ion-ios-people"></i>
            </div>
        </div>

        <div id="page-container">
            <div class="card">
                <div class="title">Users</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Languages</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Sexual Harrasment</option>
                                        <option value="">Bulying</option>
                                        <option value="">Interview Dsicrimination.</option>

                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


<div>
  <div class="search-wrapper">
    <label for="search">Search Users</label>
    <input type="search" id="search" data-search />
  </div>
   <div class="user-cards" data-user-cards-container></div>
  <template data-user-template>
    <div class="card">
      <div class="header" data-header></div>
      <div class="body" data-body></div>
    </div>
  </template>
</div>

    <span id="show-lable">Hello</span>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script><script  src="./script.js"></script>
<script>const userCardTemplate = document.querySelector('[data-user-template]')
const userCardContainer = document.querySelector('[data-user-cards-container]')
const searchInput = document.querySelector('[data-search]')

let users = []

searchInput.addEventListener('input', e => {
    const value = e.target.value.toLowerCase()
    users.forEach(user => {
        const isVisible =
            user.name.toLowerCase().includes(value) ||
            user.email.toLowerCase().includes(value)
        user.element.classList.toggle("hide", !isVisible)
    })
})

fetch("https://jsonplaceholder.typicode.com/users")
    .then(res => res.json())
    .then(data => {
      users = data.map(user => {
        const card = userCardTemplate.content.cloneNode(true).children[0]
        const header = card.querySelector('[data-header]')
        const body = card.querySelector('[data-body]')
        header.textContent = user.name
        body.textContent = user.email
        userCardContainer.append(card)
        return { name: user.name, email: user.email, element: card }
        })
    })</script>
</body>
</html>
