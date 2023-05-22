@extends('layouts.menu')
@section('content')
<style>
  .line-bottom {
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
    margin-bottom: 10px;
  }
  .rating {
  display: flex;
  flex-direction: column;
  }

  .rating-row {
  width: 150px; /* Adjust the width as needed */
  margin-bottom: 5px; /* Add spacing between rating rows */
  display: flex;
  justify-content: space-between;
}

.star-icon {
  font-size: 1rem; /* Adjust star size as needed */
  color: #e0e0e0; /* Light gray color */
}

.filled-star {
  color: #f7d618; /* Yellow color */
}

.far-star {
  margin-right: 10px; /* Add spacing between stars for ratings less than 5 */
}

</style>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <h4><b><i class="fa fa-filter fa-xs"></i> Filter</b></h4>
      <div class="card">
        <div class="card-body">
          <!-- Add your filter elements here -->
          <div class="form-group line-bottom">
            <label for="filter-range">Shipped From</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="filter1">
              <label class="form-check-label" for="filter1">
                Local
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="filter2">
              <label class="form-check-label" for="filter2">
                Overseas
              </label>
            </div>
          </div>
          <div class="form-group line-bottom">
            <label for="filter-range">Price</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Less than 100
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                RM 100 - RM 200
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                RM 200 - RM 300
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                RM 300 - RM 400
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                RM 400 - RM 500
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                More than RM 500
              </label>
            </div>
          </div>
          <div class="form-group line-bottom">
            <label for="filter-range">Rating</label>
            <div class="rating" id="filter-rating">
              @for ($row = 5; $row >= 1; $row--)
                <div class="rating-row">
                  <!-- Generate stars for the current rating -->
                  @for ($star = 1; $star <= 5; $star++)
                    <i class="fa fa-star star-icon @if($star <= $row) filled-star @endif"></i>
                  @endfor
                </div>
              @endfor
            </div>
            <input type="hidden" id="filter-rating-value" name="filter-rating">
          </div>
          <div class="form-group line-bottom">
            <label for="filter-range">Services & Promotion</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="filter1">
              <label class="form-check-label" for="filter1">
                Free Shipping
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="filter2">
              <label class="form-check-label" for="filter2">
                10% Cashback
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="filter3">
              <label class="form-check-label" for="filter3">
                25 Payday
              </label>
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button class="btn btn-primary">Apply</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="row align-items-center p-2">
        <div class="col-md-6">
          <div class="form">
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control form-input" placeholder="Search anything...">
              <span class="input-group-text right-pan"><i class="fa fa-microphone"></i></span>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              Sort By
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="sortDropdown">
              <li><a class="dropdown-item" href="#">Price-low to high</a></li>
              <li><a class="dropdown-item" href="#">Price-high to low</a></li>
              <li><a class="dropdown-item" href="#">Best Seller</a></li>
              <li><a class="dropdown-item" href="#">Newest</a></li>
              <li><a class="dropdown-item" href="#">Best Seller</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="image/image1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title <span class="badge bg-success">New</span></h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/image1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title <span class="badge bg-success">New</span></h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/image1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/image1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/image1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/image1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/image1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/image1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="mt-4" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', () => {
  const stars = document.querySelectorAll('.star-icon');

  stars.forEach((star, index) => {
    // Add 'fas' class to all stars
    star.classList.add('fas');
    });
  });
</script>
@endsection
