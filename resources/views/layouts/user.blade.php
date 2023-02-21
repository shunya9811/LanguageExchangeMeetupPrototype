<p class='pt-4 pb-2'>Members</p>

<!-- user1 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
            <img class="avator" src="https://i.pravatar.cc/150?img=2" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Shannon B.</p>
                <p>Native language: Japanese</p>
                <p>Known Languages: Chinese</p>
                <p>Target Languages: English, French </p>
            </div>
        </div>
    </div>
</div>
<!-- user1 end -->

<!-- user2 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
            <img class="avator" src="https://i.pravatar.cc/150?img=12" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Robert</p>
                <p>Native language: English</p>
                <p>Known Languages: None</p>
                <p>Target Languages: Japanese </p>
            </div>
        </div>
    </div>
</div>
<!-- user2 end -->

<!-- user3 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
            <img class="avator" src="https://i.pravatar.cc/150?img=51" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Toby T.</p>
                <p>Native language: Spanish</p>
                <p>Known Languages: None</p>
                <p>Target Languages: Japanese </p>
            </div>
        </div>
    </div>
</div>
<!-- user3 end -->

<!-- user4 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
            <img class="avator" src="https://i.pravatar.cc/150?img=35" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Izzi Z.</p>
                <p>Native language: Spanish</p>
                <p>Known Languages: English</p>
                <p>Target Languages: Japanese</p>
            </div>
        </div>
    </div>
</div>
<!-- user4 end -->

<!-- user5 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
            <img class="avator" src="https://i.pravatar.cc/150?img=25" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Chang K.</p>
                <p>Native language: Chinese</p>
                <p>Known Languages: Japanese</p>
                <p>Target Languages: English</p>
            </div>
        </div>
    </div>
</div>
<!-- user5 end -->
@foreach($users as $user)
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                <img class="avator" src="https://i.pravatar.cc/150?img=25" alt="">
            </div>
            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>{{$user->getUsername()}}</p>
                    <p>Native language: {{$user->getNativeLanguage()}}</p>
                    <p>Known Languages: {{$user->getKnownLanguages()}}</p>
                    <p>Target Languages: {{$user->getTargetLanguages()}}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach