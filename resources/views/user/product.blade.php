@extends('layouts.menu')
@section('content')
<style>
  .line-bottom {
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
    margin-bottom: 10px;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <!-- Filter area -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Filters</h5>
          <!-- Add your filter elements here -->
          <div class="form-group line-bottom">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="filter1">
              <label class="form-check-label" for="filter1">
                Filter 1
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="filter2">
              <label class="form-check-label" for="filter2">
                Filter 2
              </label>
            </div>
          </div>
          <div class="form-group line-bottom">
            <label for="filter-range">Price</label>
            <div class="range-slider">
              <input type="range" id="price" name="price" min="0" max="1000" value="0" step="1" class="slider">
              <div class="range-fill"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row row-cols-1 row-cols-md-3 g-4">
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

  <script type="text/javascript">
  const priceInput = document.getElementById('filter-range');
  const priceValue = document.getElementById('price-value');
  const minPrice = 0; // Minimum price value
  const maxPrice = 1000; // Maximum price value

  // Set the minimum and maximum values for the range input
  priceInput.setAttribute('min', minPrice);
  priceInput.setAttribute('max', maxPrice);

  // Update the displayed value when the range input changes
  priceInput.addEventListener('input', () => {
    priceValue.textContent = 'RM ' + priceInput.value;
  });
</script>
@endsection