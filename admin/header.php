<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>
    <div id="menu">
        <div class="pure-menu">
            <div class="pure-menu-heading" style="background-color: #222222;">
                <div style="text-align: right;">
                <a href="admin_profile.php"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
                <div style="color: gray;text-align: center;text-transform:none;">
                <img class = "img-circle" src="../images/<?php echo $image_name;?>" style="width: 50px;height: 50px;">
                <br>
                <?php echo substr($name, 0,10);?>
                </div>
                <div style="text-align: right;font-weight: bold;">
                    <a href="?logout">Log out</a>
                </div>
            </div>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Services</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="../assets/javascript/side-menu.js"></script>