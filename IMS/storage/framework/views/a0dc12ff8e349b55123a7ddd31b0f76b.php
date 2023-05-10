<nav>
    <ul style="text-decoration: none">
        <li class="logo">
            <img src="<?php echo e(asset('images/Logo White.svg')); ?>" alt="Logo">
        </li>
        <li><a href="#">
            <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#">
            <span class="nav-item">Inventory</span>
        </a></li>
        <li><a href="#">
            <span class="nav-item">Reports</span>
        </a></li>
        <li><a href="#">
            <span class="nav-item">Users</span>
        </a></li>
        <li><a href="#">
            <span class="nav-item">Database</span>
        </a></li>
        <li style="margin-bottom:20%;"><a href="#">
            <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="#">
            <table style="margin-left:auto;margin-right:auto;width:100%;">
                <tr>
                    <td rowspan="2"><img src="<?php echo e(asset('images/User.svg')); ?>" alt="User" class="propic"></td>
                    <td>
                        <?php if(auth()->guard()->check()): ?>
                            <span style="text-transform:uppercase" class="tab-item"><?php echo e(auth()->user()->name); ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><span class="tab-item"><a href=<?php echo e(route('logout')); ?>>Log Out</a></span></td>
                </tr>
            </table>
        </a></li>
    </ul>
</nav><?php /**PATH D:\Projects by Navva\UOC\IMS\IMS\resources\views/include/sidebar.blade.php ENDPATH**/ ?>