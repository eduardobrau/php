<?php 
namespace Components; 
class Form 
{
  public function __construct()
  {
    print("Olá eu sou a classe " .get_class(). " declarada no namespace Components: ");
  }
} 
 
class Field 
{
  public function __construct($mensagem)
  {
    print("Olá eu sou a classe " .get_class(). " declarada no namespace Components: ");
  }
}