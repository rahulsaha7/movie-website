<?php
   




?>

<div class="container-fluid ">
<div>

        <h4 style="color:white;" >Add Movie</h4>
    
</div>
<form class="form-inline my-2   search my-lg-0 movie-add" id="my-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
    <div class="d-flex flex-column flex-lg-row flex-xl-row flex-sm-column flex-md-column">
        <section  class="" >
            <input class="form-control mr-sm-2 image-upload" type="text" placeholder="Title" name="title" aria-label="Title" required="">
            
            <input class="form-control mr-sm-2 " type="text" placeholder="Genre" name="genre" aria-label="Search">

            <input class="form-control mr-sm-2 image-upload" type="file" value="Upload Image" name="image" accept=".png, .jpg, .jpeg" required="">
        </section>

        <section class="">
            
            <!-- <input class="form-control mr-sm-2 search-box" type="textarea" placeholder="Description" aria-label="Search"> -->
            <textarea rows = "5" placeholder="Description" name = "description" required=""></textarea>
        </section>
        <input class="form-control mr-sm-2 " type="text" placeholder="Age Rating" name="age_rating" aria-label="Search" required="">


    </div>

    <div class="d-flex flex-row">
    
        <section>
            <input class="form-control mr-sm-2 " type="text" placeholder="Release year" name="year" aria-label="Title" required="">
        </section>

        <section>
            <!-- <input class="form-control mr-sm-2 " type="text" placeholder="Choose Language" aria-label="Title    ">     -->
            <input class="form-control mr-sm-2 " type="text" placeholder="Movie  category" name="rated" required=""> 
        </section>


    </div>

    <div class="d-flex flex-column">
        <section class="d-flex flex-row">
            <input class="form-control mr-sm-2 " type="text" placeholder="Movie Duration" name="duration" required=""> 
            <input class="form-control mr-sm-2 " type="text" placeholder="Country" name="country" required=""> 
        </section>

        
        <section class="d-flex flex-row">
            <input class="form-control mr-sm-2 " type="text" placeholder="Language  ln1,ln2,..." name="language" required=""> 
            <input class="form-control mr-sm-2 " type="text" placeholder="Director" name="director" required="">
        </section>
        

        <section class="d-flex flex-row" >
            <input class="form-control mr-sm-2 " type="text" placeholder="Writer" name="writer" required=""> 
            <input class="form-control mr-sm-2 " type="text" placeholder="Production" name="production_company" required=""> 
        </section>
        <!-- <section>
            <input class="form-control mr-sm-2 " type="text" placeholder="Production" name="production_company" required=""> 
        </section> -->
       
        <section class="d-flex flex-row" >
            <input class="form-control mr-sm-2 " type="text" placeholder="IMDB Rating" name="avg_vote" required=""> 
            <input class="form-control mr-sm-2 " type="text" placeholder="Budget" name="budget" required=""> 
        </section>
       
        <section class="d-flex flex-row">
            <input class="form-control mr-sm-2 " type="text" placeholder="Income" name="income" required=""> 
            <textarea  placeholder="Cast name1,name2, ..." name = "cast" required=""></textarea>
        </section>

        <section class="d-flex flex-row"> 
            <select placeholder="choose Categories" name="type" required="">
                <option selected=""disabled>Type</option>
                <option value="movie">Movie</option>
                <option value="series">Series</option>
            </select>
        </section>

       


    </div>

    <div>
        <button class="btn btn-primary" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Cancel</button>
    </div>

</form> 
    

</div>