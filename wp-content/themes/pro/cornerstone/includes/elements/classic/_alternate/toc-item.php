<?php

class CS_Toc_Item extends Cornerstone_Element_Base {

  public function data() {
    return array(
      'name'        => 'toc-item',
      'title'       => __( 'TOC Item', 'cornerstone' ),
      'section'     => '_content',
      'render'      => false,
      'library'     => false,
      'context'     => 'generator'
    );
  }

  public function controls() { }

}