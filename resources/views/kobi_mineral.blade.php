@extends('layouts.main')
@section('content')



<section id="about-part" class="pt-60" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(120,170,102,0.26934523809523814) 100%);">
    <div class="container">

        <div class="row">


            <div class="col-lg-1"> </div>
            <div class="col-lg-10 text-center" style="padding-top:80px; padding-bottom:40px;"> 

                <h3 style="color:#78AA66;"> მინერილიზაცია და შემადგენლობა</h3><br>
                <p>

                    საქართველო მდიდარია წყლის რესურსებით, ჰიდროგეოლოგიური რუქის მიხედვით საქართველოში 730-ზე მეტი სახეობის მინერალური წყალი მოიპოვება, რომელიც განსხვავებულია თავისი უნიკალური თვისებებით. მიზანი სწორედ ამ 730 წყაროდან 1 ყველაზე საუკეთესოს მიგნება იყო, რომელიც შემადგენლობით, გემოვნური თვისებებით და ყველა კრიტერიუმით სრულ თანხვედრაში იქნებოდა მსოფლიო სტანდარტებთან. 


                   </p>

               

            </div>
            <div class="col-lg-1"> </div>  





        </div>
    </div>
</section>







<section id="about-part" class="pt-10">
    <div class="container">
        <div class="row mt-10">
            <div class="col-lg-6">
                <div class="about-content mt-70">
                    <h3 style="color:#000;"> ოქროს საბადო</h3>
                    <br>
                    <p>

                        მრავალი კვლევა ძიების შემდეგ კომპანიამ მიაგნო „კობი“-ს 
წყლის ე.წ. ოქროს საბადოს, რომელიც მსოფლიო ტრენდის 
მიხედვით დაბალმინერალიზირებული (საშუალო 
მინერალიზაცია 2 გ/ლ), მაგრამ ამავე დროს კალციუმითა და 
ნახშირმჟავა იონებით მდიდარი იყო. 


                    </p>

                </div>
            </div>



            <div class="col-lg-6" align="right">

                <img src="{{Request::root()}}/assets/img/kobi_poster.png" alt="Video">

            </div>



        </div>






    </div>
</section>


<section id="products-part">
    <div class="row" style="
    background-color:#fff;
          background-image:url('{{Request::root()}}/assets/img/kobi_mineral_footer.svg'); 
          background-size: 100%; 
          background-position: top;
          height:100px;
          width:100%;
          margin-left:0px;
          margin-right:0px;
          background-repeat: no-repeat;">
    </div>
</section>

<section id="about-part">
    <div class="row" style="background-color:#363B35; margin-left:0px; margin-right:0px;">

        <div class="col" align="right">
            <img src="{{Request::root()}}/assets/img/kobi_poster_mineral.png" alt="Video" style="margin-right: 18%;">
        </div>

        <div class="col align-middle" align="left"><br><br><br>
            <img src="{{Request::root()}}/images/kobi_stati.png" alt="Video">
        </div>


  


    </div>

    <div class="row" style="background-color:#363B35; margin-left:0px; margin-right:0px;">
        <br><br><br>
    </div>

</section>




@endsection
