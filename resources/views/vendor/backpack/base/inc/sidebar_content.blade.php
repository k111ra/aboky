<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class=nav-item><a class=nav-link href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('produit') }}'><i class='nav-icon fa fa-shopping-cart'></i> Produits</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('categorie') }}'><i class='nav-icon fa fa-list'></i> Categories</a></li>
