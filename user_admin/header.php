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
                <a href="user_profile.php"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
                <div style="color: gray;text-align: center;text-transform:none;">
                <img class = "img-circle" src="../images/<?php if(!empty($image_name)){echo $image_name;}else{echo 'default.png';}?>" style="width: 50px;height: auto;">
                <br>
                <?php if(!empty($name)){echo substr($name, 0,10);}else{echo 'Mr.X';}?>
                </div>
                <div style="text-align: right;font-weight: bold;">
                    <a href="?logout">Log Out</a>
                </div>
            </div>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Account</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Message</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="../assets/javascript/side-menu.js"></script>