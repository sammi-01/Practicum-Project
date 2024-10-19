<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">
        
        <!-- Admin Dashboard -->
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{route('dashboard')}}">
            <svg class="bi"><use xlink:href="#house-fill"/></svg>
            Dashboard
          </a>
        </li>
        @endif

        <!-- Company List (Visible to both Admin and Company) -->
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{route('company.list')}}">
            <svg class="bi"><use xlink:href="#file-earmark"/></svg>
            Company
          </a>
        </li>
        @endif

        <!-- Job Category (Admin Only) -->
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{route('Category.list')}}">
            <svg class="bi"><use xlink:href="#file-earmark"/></svg>
            Job Category
          </a>
        </li>
        @endif

        <!-- Applicants List (Visible to both Admin and Company) -->
        @if(auth()->user()->role == 'admin' || auth()->user()->role == 'company')
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{route('applicants.list')}}">
            <svg class="bi"><use xlink:href="#cart"/></svg>
            Applicants list
          </a>
        </li>
        @endif

        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{route('report.view')}}">
            <svg class="bi"><use xlink:href="#cart"/></svg>
            Report
          </a>
        </li>
        @endif

        

        <!-- Job Post (Visible to both Admin and Company) -->
        @if(auth()->user()->role == 'admin' || auth()->user()->role == 'company')
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{route('jobpost.list')}}">
            <svg class="bi"><use xlink:href="#people"/></svg>
            Job Post
          </a>
        </li>
        @endif

      </ul>

      <hr class="my-3">

      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="logout">
            <svg class="bi"><use xlink:href="#door-closed"/></svg>
            Sign out
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
