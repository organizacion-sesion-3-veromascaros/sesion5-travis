<?php
class Comparador
{
 
    public function par($a)
    {
        return ($a % 2 == 0);
    }

    public function impar($a)
    {
        return ($a %2 != 0);
    }

    public function menor($a, $b)
    {
        return ($a < $b);
    }
	
	public function mayor($a, $b)
    {
        return ($a > $b);
    }
	
	public function igual($a, $b)
	{
		return ($a == $b);
	}
	
	public function diferente($a, $b)
	{	
		return ($a != $b);
	}
}