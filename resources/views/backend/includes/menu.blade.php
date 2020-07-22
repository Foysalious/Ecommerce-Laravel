
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="index.html" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="{{route('dashboard')}}" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <!--manage Category start-->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage Category</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('managecategory')}}" class="sub-link">All Category </a></li>
            <li class="sub-item"><a href="{{route('createcategory')}}" class="sub-link">Add New Category</a></li>
          </ul>
        </li>
                <!--manage Category end-->

                 <!--manage brand start-->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage Brand</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('manageBrand')}}" class="sub-link">All Brand </a></li>
            <li class="sub-item"><a href="{{route('createBrand')}}" class="sub-link">Add New Brand</a></li>
          </ul>
        </li>
                <!--manage brand end-->

                         <!--manage Product start-->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage Product</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('manageProduct')}}" class="sub-link">All Product </a></li>
            <li class="sub-item"><a href="{{route('createProduct')}}" class="sub-link">Add New Product</a></li>
          </ul>
        </li>
                <!--manage Product end-->



          <!--manage Division start-->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage Division</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('manageDivision')}}" class="sub-link">All Division </a></li>
            <li class="sub-item"><a href="{{route('createDivision')}}" class="sub-link">Add New Division</a></li>
          </ul>
        </li>
        <!--manage Division end-->

         <!--manage District start-->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage District</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('manageDistrict')}}" class="sub-link">All District </a></li>
            <li class="sub-item"><a href="{{route('createDistrict')}}" class="sub-link">Add New District</a></li>
          </ul>
        </li>
        <!--manage District end-->
        
        

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->