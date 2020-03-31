# popterms
PopTerms is a simple web application that allows to use controlled vocabularies managed by TemaTres and integrate it with any web form or web application.  
PopTerms do not requires TemaTres, You dont need to have your own TemaTres installation. You can use any vocabulary available in TemaTres.  PopTerms use the terminological web services provided by TemaTres. 
There are more than 500 vocabularies https://www.vocabularyserver.com/vocabularies/. You can browse, search and select terms and use them in your tool or system. 

#Config PopTerms
To config PopTerms you need to edit the config file config.ws.php.

##Config the following options:

The sources of terminological webs services provided by any instance of TemaTres. You can define many sources. There are no limited number of sources. To add source, add occurrence to the array $CFG_VOCABS. The first source is the default source ($CFG_VOCABS[1]).

#### Config source of data
    Example:
	//URL_BASE param: the endpoint of Tematres Web Services to use (the URL of your tematres + "services.php")
    $CFG_VOCABS[1]["URL_BASE"]="https://vocabularyserver.com/unesco/en/services.php";
    
	//ALPHA param: Characters to use in alphabetical navigation. You need to define one list to each source. 	$CFG_VOCABS[1]"ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
	
	//ALIAS param: Alias to call the vocab from the client (from web form). 	$CFG_VOCABS[1]"ALIAS"]="UNESCO";
	
	//TREE param: Optional. If this param = 0 do no show hierarchical tree navigation. If null or 1, show hierarchical tree navigation. Default is 1 or null.
	$CFG_VOCABS[1]"ALIAS"]="UNESCO";
	    
#### Functional configurations
        
    Character to use for concatenate terms in the form. This character will be used in all the terminological sources.
    Example:
    $_PARAMS["_STRING_SEPARATOR"]=';


#How to use PopTerms in my web tool?
Code for the web form

###### First step: include in the PopTerms javascript library

    <!-- PopTerms Client JavaScript -->
    <script src="js/popterms.js"></script>
  <script>
        PopTerms.size(400, 500);
        PopTerms.separator = " - ";
    </script>
             
###### Second step: Include link to your PopTerms
The link must to have the following params:

    data-popterms-server : URL of PopTerms
    data-popterms-vocabulary : the ALIAS of the vocabulary (configurated in PopTerms)
    data-popterms-target : DOM identify of the form tag

Optional params:

    data-popterms-multiple : Allow multiples values in the form tag (true/false)
    data-popterms-separator : char used as string separator between the terms
    
###### 	Example: One thesaurus term selection	
    <a href="#" data-popterms-server="../server/"
                data-popterms-vocabulary="UNESCO"
                data-popterms-target="#keywords"
      > Select a term</a>
               <br>
               <input id="keywords" class="order-input" type="text" size="100">

    
###### 	Example: Multiple terms selection	
    <a href="#" data-popterms-server="../server/"
                data-popterms-vocabulary="UNESCO"
                data-popterms-target="#keywords"
				data-popterms-multiple="true"
                data-popterms-separator=" , "
      > Select a term</a>
               <br>
               <input id="keywords" class="order-input" type="text" size="100">

    
###### 	Example: Usage of a div instead of an input or a textarea
    <a href="#" data-popterms-server="../server/"
                data-popterms-vocabulary="UNESCO"
                data-popterms-target="#keywords"
                data-popterms-multiple="true"
                data-popterms-separator="<br>"		
      > Select a term</a>
               <br>
               <input id="keywords" class="order-input" type="text" size="100">

