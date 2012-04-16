<?php

class View {
    
    public function render($layout, $view, $data = null){
        global $config;
        
        // Extract variables
        if(isset($data)) extract($data);
        
        /*
         * Send the full path of the view.
         * This also handles the support of using more than one view in the
         * same layout.
         */
        if(is_array($view))
            foreach($view as $index => $value)
                $view[$index] = $config['path']['views'] . $value . '.php';
        else
            $view = $config['path']['views'] . $view . '.php';
        
        // Include layout, with the view and the data
        include $config['path']['layouts'] . $layout . '.php';
    }
    
}