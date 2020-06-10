<!-- begin:: Aside Menu -->
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper" >
    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
        data-ktmenu-dropdown-timeout="500" >
        <ul class="kt-menu__nav ">


            <li class="kt-menu__item " aria-haspopup="true"><a href="" class="kt-menu__link "><i class="kt-menu__link-icon 
                            flaticon-layer"></i><span class="kt-menu__link-text">INICIO</span></a></li>
            <li class="kt-menu__section ">
                <h4 class="kt-menu__section-text">Listado  de citas</h4>
                <i class="kt-menu__section-icon flaticon-more-v2"></i>
            </li>

           
           

            

            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route('citasdeldia') }}" class="kt-menu__link "><i class="kt-menu__link-icon 
                flaticon-email"></i><span class="kt-menu__link-text">Citas del dia</span></a></li>

             @if(auth()->user()->id == 1 || auth()->user()->id ==2)
            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route('listadogeneral') }}" class="kt-menu__link "><i class="kt-menu__link-icon 
                    flaticon-email"></i><span class="kt-menu__link-text">Listado General</span></a></li>
             @endif
            
             @if(auth()->user()->id ==1 || auth()->user()->id ==2)
            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route('registrar.cita.telefono') }}" class="kt-menu__link "><i class="kt-menu__link-icon 
                        flaticon-email"></i><span class="kt-menu__link-text">Registrar cita</span></a></li>

            @endif
        </ul>
    </div>
</div>

<!-- end:: Aside Menu -->