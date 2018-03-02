<?php

use yii\helpers\Url;

?>
<div class="site-menubar site-menubar-light">
  <div class="site-menubar-body">
    <div>
      <div>
        <ul class="site-menu" data-plugin="menu">
          <li class="site-menu-category">General</li>
          <li class="dropdown site-menu-item has-sub">
            <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
              <i class="site-menu-icon wb-stats-bars" aria-hidden="true"></i>
              <span class="site-menu-title">M</span>
              <span class="site-menu-arrow"></span>
            </a>
            <div class="dropdown-menu">
              <div class="site-menu-scroll-wrap is-list">
                <div>
                  <div>
                    <ul class="site-menu-sub site-menu-normal-list">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="<?=Url::base()?>">
                          <span class="site-menu-title">1</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="<?=Url::base()?>">
                          <span class="site-menu-title">2</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="<?=Url::base()?>">
                          <span class="site-menu-title">3</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="<?=Url::base()?>">
                          <span class="site-menu-title">4</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</div>