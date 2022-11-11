export class ProductsService {
    private products = [
      {
        id: 1,
        name: 'Television',
        status: 'On Stock'
      },
      {
        id: 2,
        name: 'Ceiling Fan',
        status: 'Out Of Stock'
      },
      {
        id: 3,
        name: 'Air Conditioner',
        status: 'On Stock'
      }
    ];
  
    getProducts() {
      return this.products;
    }
  
    getProduct(id: number) {
      const product = this.products.find(
        (p) => {
          return p.id === id;
        }
      );
      return product;
    }
  
    updateProduct(id: number, productInfo: {name: string, status: string}) {
      const product = this.products.find(
        (p) => {
          return p.id === id;
        }
      );
      if (product) {
        product.name = productInfo.name;
        product.status = productInfo.status;
      }
    }
  }
  