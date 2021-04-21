<?PHP
	class Equipement{
		private ?int $id = null;
		private ?string $typeeq = null;
		private ?string $eq = null;
		private ?string $prix = null;
		
		function __construct(string$typeeq, string $eq, string$prix){
			
			$this->typeeq=$typeeq;
			$this->eq=$eq;
			$this->prix=$prix;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getTypeeq(): string{
			return $this->typeeq;
		}
		function getEq(): string{
			return $this->eq;
		}
		function getPrix(): string{
			return $this->prix;
		}

		function setTypeeq(string $typeeq): void{
			$this->typeeq=$typeeq;
		}
		function setEq(string $eq): void{
			$this->eq;
		}
		
		function setPrix(string $prix): void{
			$this->prix=$prix;
		}
	}
?>