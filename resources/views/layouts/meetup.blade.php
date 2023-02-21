<p class='pt-4 pb-2'>Group near Los Angeles</p>

<!-- meetup1 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
            <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/10/16/13/44/young-woman-1745173__340.jpg" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Meetup in Long Beach</p>
                <p>Language A: Japanese</p>
                <p>Language B: English</p>
                <p>Capacity: 10</p>
            </div>
        </div>
    </div>
</div>
<!-- meetup1 end -->

<!-- meetup2 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
            <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/08/16/19/07/los-angeles-1598750__340.jpg" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Meetup in DT Los Angeles</p>
                <p>Language A: Korean</p>
                <p>Language B: English</p>
                <p>Capacity: 16</p>
            </div>
        </div>
    </div>
</div>
<!-- meetup2 end -->

<!-- meetup3 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
            <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/08/16/17/32/hollywood-sign-1598473__340.jpg" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Meetup in HollyWood</p>
                <p>Language A: English</p>
                <p>Language B: Spanish</p>
                <p>Capacity: 8</p>
            </div>
        </div>
    </div>
</div>
<!-- meetup3 end -->

<!-- meetup4 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
            <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2015/10/12/22/01/lake-985226__340.jpg" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Meetup in Irvine</p>
                <p>Language A: Japanese</p>
                <p>Language B: Spanish</p>
                <p>Capacity: 4</p>
            </div>
        </div>
    </div>
</div>
<!-- meetup4 end -->

<!-- meetup5 start -->
<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
            <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/09/09/18/25/usa-1657783__340.jpg" alt="">
        </div>
        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Meetup in Santa Monica</p>
                <p>Language A: English</p>
                <p>Language B: Spanish</p>
                <p>Capacity: 20</p>
            </div>
        </div>
    </div>
</div>
<!-- meetup5 end -->

@foreach($meetups as $meetup)
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/09/09/18/25/usa-1657783__340.jpg" alt="">
            </div>
            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Meetup in {{$meetup->getLocation()}}</p>
                    <p>Language A: {{$meetup->getLanguageA()}}</p>
                    <p>Language B: {{$meetup->getLanguageB()}}</p>
                    <p>Capacity: {{$meetup->getMax()}}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach