<?php
/*

  Plugin Name: PageLines Section Anchor This

  Description: A Anchor Based Masthead Section.

  Author:     iHeartPageLines

  Version:     2.1.0

  PageLines:   PL_Section_AnchorThis

  Tags:         maststhead

  Category:     framework, sections

  Filter:       component

*/


/** A guard to prevent the section from being loaded if platform isn't installed or at the wrong time */
if( ! class_exists('PL_Section') ){
  return;
}


class PL_Section_AnchorThis extends PL_Section {

  function section_styles(){

   /** Include the sample script */
   pl_script( $this->id, $this->base_url . '/anchorthis.js' );

 }


  function section_opts(){

      $options = array();

       $options = array(
         array(
           'type'    => 'text',
           'key'     => 'shout_title',
            'label'   => 'Anchor This Title',
             'default'  => __('Anchor This Section  ', 'pagelines')
         ),
             array(
            'key'      => 'shout_sub',
            'type'     => 'richtext',
            'default'  => __('An Anchor Based Navagation Section  ', 'pagelines'),
            'label'    => 'Big Hero Sub Text'
          ),
              
              array(
           'type'  => 'select_icon',
           'key'   => 'icon',
           'default'  => __('Choose Your Icon', 'pagelines'),
           'label' =>  'Select Icon'
         ),
         array(
            'type'      => 'text',
            'key'       => 'link',
            'label'     => __( 'Link URL or Section ID', 'pl-platform' )
    ),
         array(
          'key'     => 'bounce',
          'type'    => 'check',
          'label'   => __( 'Bounce Animation', 'pagelines' )
        ),

        


        );

    return $options;
  }

  /**
   * The section HTML output
   */
  function section_template(){ ?>

    <div class="bighero-wrap">

      <div class="bighero-container">

    <div id="bighero-me" class="bighero-content pl-content-area pl-content-area-wide">

        <!-- masthead -->
        <div class="bighero-mast pl-alignment-default-center">
          <div class="bighero-mast-pad">
            <h1 class="bighero-title" data-bind="pltext: shout_title"></h1>
            <h3 class="bighero-subtitle" data-bind="pltext: shout_sub"></h3>
            <div class="bighero-footer">
              <div class="bighero-arrow-wrap pl-trigger" data-bind="plclassname: [bounce() == 1 ? 'do-bounce' : '']">
                  <a class="bighero-icon-container" data-bind="plhref: link" href="#">
                    
                    <div class="bighero-icon pl-icon" data-bind="class: 'pl-icon-'+icon()"></div>
                  </a>
              </div>
      </div>
            
          </div>
        </div>
      </div>
        <!-- end masthead -->

        

    </div>
  </div>

    <?php
  }

}
