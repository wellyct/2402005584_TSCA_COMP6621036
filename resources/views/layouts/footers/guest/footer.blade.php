  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      </div>
      @if (!auth()->user() || \Request::is('static-sign-up')) 
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              <a href="about" class="font-weight-bold" target="_blank">2402005584 - Welly Yanto</a>
                    for a Final Exam..
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
