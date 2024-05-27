import { Product,FragileProduct ,ChemicalProduct} from './Product.ts';

export abstract class Cargo {
    private products: Product[] = [];
    protected distance: number;
  
    constructor(distance: number) {
      this.distance = distance;
    }
  
    addProduct(product: Product): void {
      if (this.products.length >= 10) {
        console.log("La cargaison est pleine, impossible d'ajouter plus de produits.");
        return;
      }
      if (!this.isProductAllowed(product)) {
        console.log("Ce produit ne peut pas être ajouté à cette cargaison.");
        return;
      }
      this.products.push(product);
      console.log(`Produit ajouté. Montant total de la cargaison : ${this.calculateTotal()}`);
    }
  
    abstract isProductAllowed(product: Product): boolean;
  
    abstract calculateFreight(product: Product): number;
  
    calculateTotal(): number {
      return this.products.reduce((total, product) => total + this.calculateFreight(product), 0);
    }
  
    getProductCount(): number {
      return this.products.length;
    }
  }
export class AerialCargo extends Cargo {
    isProductAllowed(product: Product): boolean {
      return true;
    }
  
    calculateFreight(product: Product): number {
      return 5000 + product.weight * 100;
    }
  }



  
export class MaritimeCargo extends Cargo {
    isProductAllowed(product: Product): boolean {
      return !(product instanceof FragileProduct);
    }
  
    calculateFreight(product: Product): number {
      if (product instanceof ChemicalProduct) {
        return product.weight * 90;
      }
      return product.weight * 300;
    }
  }


 export class RoadCargo extends Cargo {
    isProductAllowed(product: Product): boolean {
      return true;
    }
  
    calculateFreight(product: Product): number {
      return product.weight * 100;
    }
  }
