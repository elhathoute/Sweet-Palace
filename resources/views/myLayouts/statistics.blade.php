 <!-- ======================= Cards ================== -->
 <div class="cardBox">
    <div class="carde">
        <div>
            <div class="numbers">{{ DB::table('users')->where('role', 0)->count()}}</div>
            <div class="cardeName">Customers</div>
        </div>

        <div class="iconBx">
            <i class='bx bxs-user-voice ion-icon' ></i>
        </div>
    </div>

    <div class="carde">
        <div>
            <div class="numbers">{{DB::table('users')->where('role', 1)->count()}}</div>
            <div class="cardeName">Admins</div>
        </div>

        <div class="iconBx">
            <i class='bx bx-dialpad-alt ion-icon' ></i>
        </div>
    </div>

    <div class="carde">
        <div>
            <div class="numbers">{{DB::table('room_types')->count()}}</div>
            <div class="cardeName">Rooms Type</div>
        </div>

        <div class="iconBx">
            <i class='bx bx-category-alt' ></i>
        </div>
    </div>

    <div class="carde">
        <div>
            <div class="numbers">{{DB::table('staff')->count()}}</div>
            <div class="cardeName">Staff</div>
        </div>

        <div class="iconBx">
            <i class='bx bx-user-pin' ></i>
        </div>
    </div>
</div>
