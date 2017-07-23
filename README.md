# symfony
symfony 2.8 http://developpement-informatique.com/uploads/docs/symfony/symfony28.zip
symfony 3.2 http://developpement-informatique.com/uploads/docs/symfony/symfony32.zip﻿
-------------------------------------------------------------------------------------------------
create new controller 
in controller-->route name=view folder name
render =view folder/index.html.twig
-----------------------------------------------------------------------------------
in view folder-name
create index.html.twig
{% extends 'base.html.twig' %}
{% block body %}
text to display
{% endblock body %}
----------------------------------------------------------
in view folder-name/base.html.twig
for css --><link rel="stylesheet" href="{{ asset('css/style.css') }}">

