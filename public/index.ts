abstract class Carguaison{
    private products: Product[] = [];
    protected distance: number;
  
    constructor(distance: number) {
      this.distance = distance;
    }
  
    ajoutProduit(product: Product): void {
      if (this.products.length >= 10) {
        console.log("La cargaison est pleine, impossible d'ajouter plus de produits.");
        return;
      }
      if (!this.isProductAllowed(product)) {
        console.log("Ce produit ne peut pas être ajouté à cette cargaison.");
        return;
      }
      this.products.push(product);
      console.log(`Produit ajouté. Montant total de la cargaison : ${this.sommeTotal()}`);
    }
  
    abstract isProductAllowed(product: Product): boolean;
  
    abstract calculFrais(product: Product): number;
  
    sommeTotal(): number {
      return this.products.reduce((total, product) => total + this.calculFrais(product), 0);
    }
  
    nbProduit(): number {
      return this.products.length;
    }
  }




  class AerialCargo extends Carguaison {
    isProductAllowed(product: Product): boolean {
      return !(product instanceof ChemicalProduct);
      
    }
  
    calculFrais(product: Product): number {
      return 5000 + product.weight * 100;
    }
  }

  
  
  class MaritimeCargo extends Carguaison {
    isProductAllowed(product: Product): boolean {
      return !(product instanceof FragileProduct);
    }
  
    calculFrais(product: Product): number {
      if (product instanceof ChemicalProduct) {
        return product.weight * 90;
      }
      return product.weight * 300;
    }
  }
  
  class RoadCargo extends Carguaison {
    isProductAllowed(product: Product): boolean {
      return true;
    }
  
    calculFrais(product: Product): number {
      return product.weight * 100;
    }
  }
  abstract class Product {
    public label: string;
    public weight: number;
  
    constructor(label: string, weight: number) {
      this.label = label;
      this.weight = weight;
    }
  
    abstract info(): void;
  
    get getWeight(): number {
      return this.weight;
    }
  
    set setWeight(weight: number) {
      this.weight = weight;
    }
  
    get getLabel(): string {
      return this.label;
    }
  
    set setLabel(label: string) {
      this.label = label;
    }
  }
  class FoodProduct extends Product {
    info(): void {
      console.log(`Produit alimentaire: ${this.label}, Poids: ${this.weight}kg`);
    }
  }
  



  
  class ChemicalProduct extends Product {
    private toxicityLevel: number;
  
    constructor(label: string, weight: number, toxicityLevel: number) {
      super(label, weight);
      this.toxicityLevel = toxicityLevel;
    }
  
    info(): void {
      console.log(`Produit chimique: ${this.label}, Poids: ${this.weight}kg, Degré de toxicité: ${this.toxicityLevel}`);
    }
  
    get getToxicityLevel(): number {
      return this.toxicityLevel;
    }
  
    set setToxicityLevel(toxicityLevel: number) {
      this.toxicityLevel = toxicityLevel;
    }
  }
  
  abstract class MaterialProduct extends Product {
    constructor(label: string, weight: number) {
      super(label, weight);
    }
  
    info(): void {
      console.log(`Produit matériel: ${this.label}, Poids: ${this.weight}kg`);
    }
  }
  
  class FragileProduct extends MaterialProduct {
    info(): void {
      console.log(`Produit fragile: ${this.label}, Poids: ${this.weight}kg`);
    }
  }
  
  class UnbreakableProduct extends MaterialProduct {
    info(): void {
      console.log(`Produit incassable: ${this.label}, Poids: ${this.weight}kg`);
    }
  }






  const aerialCargo = new AerialCargo(1000);
  const maritimeCargo = new MaritimeCargo(2000);
  const roadCargo = new RoadCargo(1500);
  
  const apple = new FoodProduct('Pomme', 2);
  const chemicalX = new ChemicalProduct('Chimique X', 5, 3);
  const fragileGlass = new FragileProduct('Verre', 1);
  const unbreakableMetal = new UnbreakableProduct('Métal', 10);
  
  aerialCargo.ajoutProduit(apple);
  aerialCargo.ajoutProduit(chemicalX);
  
  maritimeCargo.ajoutProduit(chemicalX);
  maritimeCargo.ajoutProduit(fragileGlass); // Devrait afficher un message d'erreur
  
  roadCargo.ajoutProduit(apple);
  roadCargo.ajoutProduit(fragileGlass);
  roadCargo.ajoutProduit(unbreakableMetal);
  

    

  document.addEventListener("DOMContentLoaded", () => {
    const cargos: { [key: string]: Carguaison} = {};
  
    const cargoForm = document.getElementById('cargo-form') as HTMLFormElement;
    const productForm = document.getElementById('product-form') as HTMLFormElement;
    const cargoSelect = document.getElementById('cargo-select') as HTMLSelectElement;
    const cargoList = document.getElementById('cargos') as HTMLUListElement;
  
    cargoForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const type = (document.getElementById('cargo-type') as HTMLSelectElement).value;
      const distance = parseFloat((document.getElementById('distance') as HTMLInputElement).value);
      
      let cargo: Carguaison;
      switch (type) {
        case 'aerial':
          cargo = new AerialCargo(distance);
          break;
        case 'maritime':
          cargo = new MaritimeCargo(distance);
          break;
        case 'road':
          cargo = new RoadCargo(distance);
          break;
      }
  
      const cargoId = `cargo-${Object.keys(cargos).length + 1}`;
      cargos[cargoId] = cargo;
      const option = document.createElement('option');
      option.value = cargoId;
      option.text = `Cargaison ${cargoId}`;
      cargoSelect.add(option);
  
      updateCargoList();
    });
  
    productForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const cargoId = cargoSelect.value;
      const type = (document.getElementById('product-type') as HTMLSelectElement).value;
      const label = (document.getElementById('product-label') as HTMLInputElement).value;
      const weight = parseFloat((document.getElementById('product-weight') as HTMLInputElement).value);
  
      let product: Product;
      switch (type) {
        case 'food':
          product = new FoodProduct(label, weight);
          break;
        
        case 'chemical':
          const toxicityLevel = parseFloat((document.getElementById('toxicity-level') as HTMLInputElement).value);
          product = new ChemicalProduct(label, weight, toxicityLevel);
          break;
        case 'fragile':
          product = new FragileProduct(label, weight);
          break;
        case 'unbreakable':
          product = new UnbreakableProduct(label, weight);
          break;
      }
  
      cargos[cargoId].ajoutProduit(product);
      updateCargoList();
    });
  
    const productTypeSelect = document.getElementById('product-type') as HTMLSelectElement;
    productTypeSelect.addEventListener('change', () => {
      const toxicitySection = document.getElementById('toxicity-level-section');
      if (productTypeSelect.value === 'chemical') {
        toxicitySection.style.display = 'block';
      } else {
        toxicitySection.style.display = 'none';
      }
    });
  
    function updateCargoList() {
      cargoList.innerHTML = '';
      Object.keys(cargos).forEach(cargoId => {
        const cargo = cargos[cargoId];
        const listItem = document.createElement('li');
        listItem.textContent = `Cargaison ${cargoId}: ${cargo.nbProduit()} produits, Montant total: ${cargo.sommeTotal()}F`;
        cargoList.appendChild(listItem);
      });
    }
  });
  