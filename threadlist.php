<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>forum</title>

</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    <?php
    $id=$_GET['catid'];
     $sql= "SELECT * FROM `categories` WHERE category_id=$id";
     $result=mysqli_query($conn,$sql);
     $row = mysqli_fetch_assoc($result);
      
      $catname=$row['category_name'];
      $catdesc=$row['category_description'];

  ?>
    <?php
      $showAlert=false;
      $method=$_SERVER['REQUEST_METHOD'];
     if($method=='POST'){
        //insert thread into db
        $th_title=$_POST['title'];
        $th_desc=$_POST['desc'];

        $th_title= str_replace("<", "&lt;",$th_title);
        $th_title = str_replace(">","&gt;",$th_title);

        $th_desc = str_replace("<", "&lt;",$th_desc);
        $th_desc = str_replace(">","&gt;",$th_desc);
        $sno=$_POST['sno'];
        $sql= "SELECT * FROM `categories` WHERE category_id=$id";
        $sql="INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ( '$th_title','$th_desc', '$id', '$sno', current_timestamp())";
          $result=mysqli_query($conn,$sql);
          $showAlert=true;
          if($showAlert){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>success!</strong> Your query has been added please wait to community to the response.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
    }
  ?>


    <!--Category container start here-->
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4"> <?php echo $catname?></h1>
            <p class="lead"><?php echo $catdesc?></p>
        </div>
    </div>
    <?php 
        if($id==1){
          echo '<h3 class="text-center" style="font-family:fantasy;">SMART LIB- CHILDREN </h3>
          <h5 class="text-center py-0" style="font-family:fantasy;">Free Online Library for the Children </h5>
          </br>     
    <div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
  <div class="col-md-4 px-4">
    <div class="card1" style="width: 18rem;">
      <img src="https://source.unsplash.com/1400x700/?study,book" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="https://openlibrary.org/subjects/children"  style="color: #8ebf42">Children|Openlibrary</a></h5>
        <p class="card-text">Open Library is an open, editable library catalog, building towards a web page for every book ever published. Read, borrow, and discover more than 3M books for free.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 px-4">
    <div class="card2" style="width: 18rem;">
      <img src="https://source.unsplash.com/1400x700/?study, fun book" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.kidsworldfun.com/" style="color: #8ebf42">Kids World Fun</a></h5>
        <p class="card-text"> Kids Online Library Enjoy FREE access to eBooks, animated eBooks, audiobooks, movies, music, comics,learning videos, online tutors, test preparation,articles and multimedia.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 px-4">
    <div class="card3" style="width: 18rem;">
      <img src="https://source.unsplash.com/1400x700/?study,magic book" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="https://magicblox.com/" style="color: #8ebf42">Magic Box</a></h5>
        <p class="card-text">An online children book library, where kids discover and read stories on a computer or tablet for free. It is also a self-publishing & marketing tool for authors & publishers.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 px-4">
    <div class="card4" style="width: 18rem;">
      <img src="https://source.unsplash.com/1400x700/?study,poembook" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.funbrain.com/" style="color: #8ebf42">Fun Brain</a></h5>
        <p class="card-text">Funbrain is the leader in online educational interactive content, with hundreds of free games, books & videos for kids of all ages. Check out Funbrain her.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 px-4">
  <div class="card5" style="width: 18rem;">
    <img src="https://source.unsplash.com/1400x700/?study,ocford book" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="https://www.oxfordowl.co.uk/for-home/reading-owl/library-page" style="color: #8ebf42">Oxford Owl</a></h5>
      <p class="card-text">FREE eBook Library from Oxford Owl for Home. Welcome to our free eBooks collection, developed for children aged 3–11 years old. </p>
    </div>
  </div>
</div>
<div class="col-md-4 px-4">
<div class="card6" style="width: 18rem;">
  <img src="https://source.unsplash.com/1400x700/?study,books" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="https://archive.org/details/iacl" style="color: #8ebf42">Children|Internet Archive</a></h5>
    <p class="card-text"> Children Library is a collection of books and videos, old and new, classic and someday classic, fiction and nonfiction, written in simple English.</p>
  </div>
</div>
</div>
<div class="col-md-4 px-4">
<div class="card7" style="width: 18rem;">
  <img src="https://source.unsplash.com/1400x700/?study,storynory book" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="https://www.storynory.com/" style="color: #8ebf42">Storynory</a></h5>
    <p class="card-text"> Storynory could be your download source as it has a huge bank of free audio stories and poems for children.</p>
  </div>
</div>
</div>
<div class="col-md-4 px-4">
<div class="card8" style="width: 18rem;">
  <img src="https://source.unsplash.com/1400x700/?study,nobel book" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="https://www.barnesandnoble.com/b/free-ebooks/kids/_/N-ry0Ztu1" style="color: #8ebf42">Barnes & Nobel</a></h5>
    <p class="card-text">Barnes & Noble free eBook collection for kids. We offer a large selection of free picture books, chapter books,free fiction, non-fiction, and educational eBooks.</p>
  </div>
</div>
</div>
<div class="col-md-4 px-4">
<div class="card9" style="width: 18rem;">
  <img src="https://source.unsplash.com/1400x700/?study,kids book" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="https://freekidsbooks.org/" style="color: #8ebf42">Free kids books</a></h5>
    <p class="card-text">Free Kids Books is a growing library of unique children books, literary resources, and textbooks for children.</p>
  </div>
</div>
</div>
</div>

<h5 class="text-center py-40" style="font-family:fantasy;">SOME RELATED-LIBRARIES </h5> 
<div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
<div class="col-md-4 px-4">
<div class="cards1" style="width: 18rem;">
  <img src="https://source.unsplash.com/1400x700/?study,tumble book" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="https://www.tumblebooklibrary.com/Default.aspx" style="color: #8ebf42">Tumble book Library</a></h5>
    <p class="card-text">TumbleBookLibrary is a curated database of children e-books, available by subscription to Elementary Schools and Public Libraries around the world.  </p>
  </div>
</div>
</div>
<div class="col-md-4 px-4">
<div class="card2" style="width: 18rem;">
  <img src="https://source.unsplash.com/1400x700/?study,hoopla book" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="http://hub.hoopladigital.com/whats-new/2016/3/childrens-content" style="color: #8ebf42">Children|Hoopla Library</a></h5>
    <p class="card-text">Our Children Look Book for 2016 is filled with videos, music, and books. a look at both collections and individual titles chosen and assembled just for kids.</p>
  </div>
</div>
</div>
<div class="col-md-4 px-4">
<div class="cards3" style="width: 18rem;">
  <img src="https://source.unsplash.com/1400x700/?study,epic book" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="https://www.getepic.com/in/" style="color: #8ebf42">Epic Library</a></h5>
    <p class="card-text">Epic is the leading digital reading platform—built on a collection of 40,000+ popular, high-quality books  for kids 12 and under.</p>
  </div>
</div>
</div>
<div class="col-md-4 px-4">
<div class="cards4" style="width: 18rem;">
  <img src="https://source.unsplash.com/1400x700/?study,storyline book" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="https://storylineonline.net/" style="color: #8ebf42">Storyline online</a></h5>
    <p class="card-text">Storyline Online®, streams videos featuring celebrated actors reading children books alongside creatively produced illustrations.</p>
  </div>
</div>
</div>
<div class="col-md-4 px-4">
<div class="cards5" style="width: 18rem;">
  <img src="https://source.unsplash.com/1400x700/?study,good reads book" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="https://www.goodreads.com/list/show/86.Best_Children_s_Books" style="color: #8ebf42">Good Reads</a></h5>
    <p class="card-text">Goodreads is the world largest site for readers and book recommendations. Our mission is to help people find and share books they love.</p>
  </div>
</div>
</div>
</div>
';
    
        }
        if($id==2){
          echo '<h3 class="text-center my-4" style="font-family:fantasy;">SMART LIB-SCHOOL STUDENTS</h3>
          <h5 class="text-center py-0" style="font-family:fantasy;">Free Online Library for the School Students </h5>
          </br> 
          <div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
        <div class="col-md-4 px-4">
          <div class="card1" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,student book" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://openlibrary.org/collections/k-12"  style="color: #8ebf42">Student|Openlibrary</a></h5>
              <p class="card-text">Welcome to Open Library Student Library, a School Library designed for a k-12 audience.
              For more student-friendly material.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card2" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,chest of book" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://chestofbooks.com/"  style="color: #8ebf42">Chest Of Books</a></h5>
              <p class="card-text">This site provides free books for your reading enjoyment. If you did like to use this site for anything other than reading the books</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card3" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,career book" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://school.careers360.com/download/ebooks"  style="color: #8ebf42">Ebook For School</a></h5>
              <p class="card-text">Careers360 provides various School entrance exam E-books for you to prepare for all entrance exams, free download and improve your preparation strategies.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card4" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,oxford book" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://home.oxfordowl.co.uk/at-school/"  style="color: #8ebf42">Oxford Owl</a></h5>
              <p class="card-text">Here, you will find overviews of some of the subjects your little one will explore at school, as well as breakdowns of what happens in each year group.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
        <div class="card5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1400x700/?study,ncert books" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="https://ncert.nic.in/ebooks.php" style="color: #8ebf42">Ebooks | NCERT</a></h5>
            <p class="card-text">NCERT prepare and publish model textbooks, supplementary material, newsletters, journals and develops educational kits, multimedia digital materials, etc. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card6" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,cbse books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://cbseacademic.nic.in/library/index.html" style="color: #8ebf42">CBSE LIBRARY</a></h5>
          <p class="card-text">The Central Board of Secondary Education library has organized collection of information resources made accessible for reference and borrowing.</p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card7" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,zendy books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://zendy.io/?signUp=true" style="color: #8ebf42"></a></h5>
          <p class="card-text">Zendy is an online library providing Open Access content is available worldwide Our powerful online library features millions of articles, journals, e-books, and more-all on a seamless platform.</p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card8" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,good books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.goodreads.com/genres/academic" style="color: #8ebf42">GoodReads</a></h5>
          <p class="card-text">The formal definition is that text should consist of arguments and debate, rather than simply present factual knowledge. Non-fiction studies, arguments, views.</p>
        </div>
      </div>
      </div>
      </div>

      </br>
      <h5 class="text-center py-40" style="font-family:fantasy;">ACADEMIC BOOKS-LIBRARIES </h5> 
      </br>
      <div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
      <div class="col-md-4 px-4">
      <div class="cards1" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,sicence books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.free-ebooks.net/academic-science" style="color: #8ebf42">Academic -Science</a></h5>
          <p class="card-text">Science (from the Latin scientia, meaning “knowledge”) is the effort to discover, and increase human understanding of how the physical world works. </p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="cards2" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,history books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.free-ebooks.net/academic-history" style="color: #8ebf42">Academic- History</a></h5>
          <p class="card-text">History is the discovery, collection, organization, and presentation of information about past events. </p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="cards3" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,envieonmental books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.free-ebooks.net/environmental-studies-academic" style="color: #8ebf42">Academic- Environmental</a></h5>
          <p class="card-text">Best Environmental Books in Nonfiction Braiding Sweetgrass: Indigenous Wisdom, Scientific Knowledge, and the Teachings of Plants by Robin Wall Kimmerer.</p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="cards4" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,Economics books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.free-ebooks.net/academic-economics/5" style="color: #8ebf42">Academic- Economics</a></h5>
          <p class="card-text">The 7 Best Economics Books of 2022. Learn how economics plays out in society and everyday life. By. Michelle Lodge.</p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="cards5" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,mathemetics books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.free-ebooks.net/mathematics" style="color: #8ebf42">Academic- mathematics</a></h5>
          <p class="card-text">basic mathematics is intended for students who need to reach the minimum level of mathematics required for their sciences, engineering and business studies.</p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="cards6" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,geography books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.free-ebooks.net/academic-geography" style="color: #8ebf42">Academic- Geography</a></h5>
          <p class="card-text">geography books are one of the best ways to learn this important subject and always have them at hand for any doubt.</p>
        </div>
      </div>
      </div>
      </div>';
               
        }
        if($id==3){
          echo '<h3 class="text-center my-4" style="font-family:fantasy;">SMART LIB- UNIVERSITY STUDENTS</h3>
          <h5 class="text-center py-40" style="font-family:fantasy;">LIBRARIES-FOR ENGINEERING STUDENT </h5> 
          </br>
          <div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
        <div class="col-md-4 px-4">
          <div class="card1" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,ebooks" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://e-booksdirectory.com/"  style="color: #8ebf42">E-book Directory</a></h5>
              <p class="card-text">E-Books Directory is a daily growing list of links to freely accessible ebooks, documents and lecture notes found all over the internet.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card2" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,openbooks" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://open.umn.edu/opentextbooks/subjects/engineering"  style="color: #8ebf42">Open TextBook Library</a></h5>
              <p class="card-text">Textbooks in the Open Textbook Library are considered open because they are free to use and distribute, and are licensed to be freely adapted or changed with proper attribution.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card3" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,books" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.infobooks.org/free-pdf-books/engineering/"  style="color: #8ebf42">Engineering-InfoBooks</a></h5>
              <p class="card-text">That education should be free and accessible to all
              That books are an excellent tool for sharing and acquiring knowledge.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card4" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,acedemicbook" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.free-ebooks.net/engineering" style="color: #8ebf42">Acedemic-Engineering</a></h5>
              <p class="card-text">This book is designed for the project manager professionals as a guide to managing projects. 
              It is also useful for the beginners as well as the experienced</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
        <div class="card5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1400x700/?study,referencebook" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="https://engineeringlibrary.org/reference/" style="color: #8ebf42">Engineering Library</a></h5>
            <p class="card-text">Engineering library provides access to a multitude of public-domain engineering resources available in one convenient location.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card6" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,sciencebook" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.sciencedirect.com/" style="color: #8ebf42">Science Direct</a></h5>
          <p class="card-text">Explore our wide selection of Life Sciences journal articles and book chapters featuring original research, insightful analysis, current theory and more.</p>
        </div>
      </div>
      </div>
      </div>
      
      </br>
      <h5 class="text-center py-40" style="font-family:fantasy;">LIBRARIES-FOR MEDICAL STUDENT </h5> 
      </br>
      <div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
    <div class="col-md-4 px-4">
      <div class="card1" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,open books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://open.umn.edu/opentextbooks/subjects/medicine"  style="color: #8ebf42">Open TextBook</a></h5>
          <p class="card-text">The authors of this book are registered nurses who have each worked 25 or more years in various roles and specialties within our healthcare system.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 px-4">
      <div class="card2" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,medicalbooks" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://freebookcentre.net/medical_text_books_journals/general_medicine_ebooks_online_texts_download.html"  style="color: #8ebf42">Medical-FreeBookCentre</a></h5>
          <p class="card-text">This book explains the following topics: General Pathology And Sanitary Science, General Etiology, Medical Diagnosis, And Prognosis etc.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 px-4">
      <div class="card3" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,acedemic books" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.free-ebooks.net/medical-academic"  style="color: #8ebf42">Medical-Academic</a></h5>
          <p class="card-text">This is a free ebook in pdf format. This book will serve as a rapid reference guide for medical undergraduate and postgraduate students.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 px-4">
      <div class="card4" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,infobook" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.infobooks.org/free-pdf-books/medical/" style="color: #8ebf42">Medical-InfoBooks</a></h5>
          <p class="card-text">Health systems pursue the well-being of societies and aim for access by the majority of the world population.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 px-4">
    <div class="card5" style="width: 18rem;">
      <img src="https://source.unsplash.com/1400x700/?study,open ebook" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="https://openlibrary.org/subjects/medicine" style="color: #8ebf42">Medicine|Open Library</a></h5>
        <p class="card-text">Open Library is an open, editable library catalog, building towards a web page for every book ever published. Read, borrow, and discover more than 3M books for free.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 px-4">
  <div class="card6" style="width: 18rem;">
    <img src="https://source.unsplash.com/1400x700/?study,sciencebook" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="https://www.nlm.nih.gov/" style="color: #8ebf42">National Library</a></h5>
      <p class="card-text">that is the world largest biomedical library and a leader in research in computational health informatics. NLM plays a pivotal role in translating biomedical research into practice.</p>
    </div>
  </div>
  </div>
  </div>
      ';
               
        }
        if($id==4){
          echo '<h3 class="text-center my-4" style="font-family:fantasy;">SMART LIB- DIGITAL</h3>
          <div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
        <div class="col-md-4 px-4">
          <div class="card1" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,child books" class="card-img-top" alt="...">
            <div class="card-body">
            
              <h5 class="card-title" ><a href="http://www.childrenslibrary.org/"  style="color: #8ebf42">ICDL</a></h5>
              <p class="card-text">ICDL-International children digal library.It is a simple version of the in-browser book reader which has enabled me to add back all of the ICDL books. </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card2" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,student books" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.ndl.gov.in/"  style="color: #8ebf42">NDLI</a></h5>
              <p class="card-text">NDLI-National Digital Library of India.NDLI is a conglomeration of freely available or institutionally contributed or donated or publisher managed contents. </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card3" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,science book" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.baen.com/"  style="color: #8ebf42">Bean Free Library</a></h5>
              <p class="card-text">Baen Free Library is a bit more niche since its digital library focuses on science fiction and fantasy titles. </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card4" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,world book" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.loc.gov/collections/world-digital-library/about-this-collection/"  style="color: #8ebf42">World Digital Library</a></h5>
              <p class="card-text">Launched in 2009, the World Digital Library selection of rare books, manuscripts, and other materials dates back to 8,000 BC.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
        <div class="card5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1400x700/?study,child" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.bookbub.com/welcome"  style="color: #8ebf42">Bookbub</a></h5>
            <p class="card-text">Bookbub has a dedicated free ebooks section that takes you to an extensive digital library full of free titles you can download.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card6" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,smashwords book" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.smashwords.com/shelves/home/1/free/any" style="color: #8ebf42">SmashWords</a></h5>
          <p class="card-text">Smashwords is considered an indie author hub where you can look for newly released titles. You can choose whether to read the ebooks online or download them.</p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card7" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,many book" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://manybooks.net/" style="color: #8ebf42">Many Books</a></h5>
          <p class="card-text">ManyBooks does indeed have a lot of ebooks to offer. all of which come from every category and genre you can imagine.</p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card8" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,universal book" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="http://ulib.isri.cmu.edu/ULIBOurCollections.htm" style="color: #8ebf42">UDL</a></h5>
          <p class="card-text">UDL-Universal Digital Library.it  is a collection of one million books.</p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card9" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,info book" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.infobooks.org/" style="color: #8ebf42">Info Books</a></h5>
          <p class="card-text">It is one of the most visited digital libraries due to its good repertoire of topics, you can find books.</p>
        </div>
      </div>
      </div>
      </div>';
               
        }
        if($id==5){
          echo '<h3 class="text-center my-4" style="font-family:fantasy;">SMART LIB-BUSINESS</h3>
          <div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
        <div class="col-md-4 px-4">
          <div class="card1" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,Buisness books" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.free-ebooks.net/best-books/business/current"  style="color: #8ebf42">Ebook-Business</a></h5>
              <p class="card-text">This book is an attempt to provide a body of practical information pertaining to business matters in a form sufficiently simple for use in the eighth, ninth, and tenth grades.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card2" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,study books" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://freebookcentre.net/Business/Business-Books.html"  style="color: #8ebf42">Business Study</a></h5>
              <p class="card-text">This section contains free e-books and guides on Business, some of the resources in this section can be viewed online and some of them can be downloaded.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card3" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,library book" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.smu.edu/libraries/business"  style="color: #8ebf42">Buisness Library</a></h5>
              <p class="card-text">The Business Library, including the Kitt Investing and Trading Center, is part of the Business and provides access to dedicated business librarians.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
           <div class="card4" style="width: 18rem;">
              <img src="https://source.unsplash.com/1400x700/?study,read book" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="https://www.goodreads.com/shelf/show/business-related"  style="color: #8ebf42">Good Reads</a></h5>
                <p class="card-text">A business (also known as enterprise or firm) is an organization engaged in the trade of goods, services, or both to consumers.</p>
              </div>
            </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card5" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,buildbook" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://teambuilding.com/blog/business-books"  style="color: #8ebf42">Teambuilding</a></h5>
              <p class="card-text">Business books are practical guides to building and running successful enterprises. The genre is diverse and offers advice to businesses of all sizes and types.</p>
            </div>
        </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card6" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,free book" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.getfreeebooks.com/category/business/"  style="color: #8ebf42">Get Free E-Books</a></h5>
          <p class="card-text">A site that brings both authors and readers into the world of free legal ebooks. Authors with their ebooks will benefit greatly from the large community of readers. </p>
        </div>
      </div>
      </div>
      <div class="col-md-4 px-4">
      <div class="card7" style="width: 18rem;">
        <img src="https://source.unsplash.com/1400x700/?study,businesses book" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href=" https://hacktheentrepreneur.com/best-business-books/"  style="color: #8ebf42">HTE</a></h5>
          <p class="card-text">HTE-hack the entrepreneur.this is a list of the best business books of all time and have helped them start and grow thousands of businesses. </p>
        </div>
      </div>
      </div>

      </div>';
               
        }
        if($id==6){
          echo '<h3 class="text-center my-4" style="font-family:fantasy;">SMART LIB- CLASSIC</h3>
          <div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
        <div class="col-md-4 px-4">
          <div class="card1" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,books" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://read.gov/books/"  style="color: #8ebf42">GOVT.|Classic Book</a></h5>
              <p class="card-text">Classic Books Turn the pages to explore bygone eras, time-honored tales and historical narratives. Adventure awaits in these classic books online.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card2" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,books" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://americanliterature.com/books/"  style="color: #8ebf42">American Literature</a></h5>
              <p class="card-text">Over 400 classic books and novels you can read free online. The library includes the greatest books of all time, including; Moby Dick, The Call of the Wild, The Prince etc.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card3" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,novel book" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.bustle.com/p/21-classic-books-that-you-can-read-for-free-online-8483838"  style="color: #8ebf42">Bustle</a></h5>
              <p class="card-text">The classics. They are the bane of many a high schooler existence. And yet, we all have one or two (or 20) classic books that we haveve been meaning to read...</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
          <div class="card4" style="width: 18rem;">
            <img src="https://source.unsplash.com/1400x700/?study,genius book" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.diygenius.com/the-classics-library-of-free-ebooks/"  style="color: #8ebf42">DiyGenius</a></h5>
              <p class="card-text">This library of classic ebooks is dedicated to the philosophers and dreamers whose ideas changed the world. Read these classics books.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-4">
        <div class="card5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1400x700/?study,child" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.planetebook.com/ebooks/"  style="color: #8ebf42">PlanetEbook</a></h5>
            <p class="card-text"> Planet eBook, the home of free classic literature! The latest version of the site, with its mobile-friendly design and multi-format eBooks, attempts to make our ebooks on all devices.</p>
          </div>
        </div>
      </div>
    </div>      

  <h5 class="text-center py-40" style="font-family:fantasy;">SOME RELATED-LIBRARIES </h5>
  <div class="row row-cols-1 row-cols-md-2 g-4 mx-2 px-2">
  <div class="col-md-4 px-4">
    <div class="cards1" style="width: 18rem;">
      <img src="https://source.unsplash.com/1400x700/?study,children books" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.free-ebooks.net/childrens-classics"  style="color: #8ebf42">Children-Classic</a></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 px-4">
    <div class="cards2" style="width: 18rem;">
      <img src="https://source.unsplash.com/1400x700/?study,fiction books" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.free-ebooks.net/fiction-classics"  style="color: #8ebf42">Fiction-Classic</a></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 px-4">
    <div class="cards3" style="width: 18rem;">
      <img src="https://source.unsplash.com/1400x700/?study,mystery book" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.free-ebooks.net/mystery-classics"  style="color: #8ebf42">Mystery-Classic</a></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 px-4">
    <div class="cards4" style="width: 18rem;">
      <img src="https://source.unsplash.com/1400x700/?study,poetry book" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.free-ebooks.net/poetry-classics"  style="color: #8ebf42">Poetry-Classic</a></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 px-4">
  <div class="card5" style="width: 18rem;">
    <img src="https://source.unsplash.com/1400x700/?study,humor book" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="https://www.free-ebooks.net/humor-classics"  style="color: #8ebf42">Humor-Classic</a></h5>
      <p class="card-text"> </p>
    </div>
  </div>
</div>
<div class="col-md-4 px-4">
  <div class="card5" style="width: 18rem;">
    <img src="https://source.unsplash.com/1400x700/?study,story book" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="https://www.free-ebooks.net/short-stories-classics"  style="color: #8ebf42">Short-Story-Classic</a></h5>
      <p class="card-text"> </p>
    </div>
  </div>
</div>
<div class="col-md-4 px-4">
  <div class="card5" style="width: 18rem;">
    <img src="https://source.unsplash.com/1400x700/?study,drama book" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="https://www.free-ebooks.net/drama-classics"  style="color: #8ebf42">Drama-Classic</a></h5>
      <p class="card-text"></p>
    </div>
  </div>
</div>
</div>';
               
        }
    ?>
    <?php 
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
   echo '<div class="container">
        <h3>Ask a Questions</h3>
        <form action=" '.$_SERVER['REQUEST_URI'].'" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailhelp" required>
                <small id="emailhelp" class="form-text text-muted">keep your title as short and crisp as
                    possible.</small>
            </div>
          
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Elaborate your query</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>';
 }
 else{
   echo' <div class="container">
   <h3>Ask a Questions</h3>
    <p class="lead">you are not logged in. please login to be able to start a Discussion.</p>
    </div>';
 }

 ?>
    <div class="container">
        <h3>Frequently Asked Questions</h3>
        <?php
    $id=$_GET['catid'];
     $sql= "SELECT * FROM `threads` WHERE thread_cat_id=$id";
     $result=mysqli_query($conn,$sql);
     $noResult=true;
     while($row=mysqli_fetch_assoc($result)){
        $noResult=false;
        $id=$row['thread_id'];
      $title=$row['thread_title'];
      $desc=$row['thread_desc'];
      $thread_time=$row['timestamp'];
      $thread_user_id=$row['thread_user_id'];
      
      $sql2="SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
      $result2=mysqli_query($conn,$sql2);
      $row2=mysqli_fetch_assoc($result2);


       echo '<div class="media my-3">
      <img src="userdefaultimg.jpg" width="34px" class="mr-3" alt="...">
      <div class="media-body">'.
         '<h5 class="mt-0"><a class="text-dark" href ="thread.php?thread_id='.$id.'">'.$title.'</a></h5>
          '.$desc. '</div>'. '<div class="font-weight-bold my-0">Asked by: '. $row2['user_email'] . ' at '. $thread_time.'</div>'.
      '</div>';
     }
     if($noResult){
        echo '<b><div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4">No threads found</p>
          <p class="lead">Be the first person to a ask a question.</p>
        </div>
      </div></b>';
     }

    ?>

    </div>
    <?php include 'partials/_footer.php';?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>

</html>