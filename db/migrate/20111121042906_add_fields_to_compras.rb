class AddFieldsToCompras < ActiveRecord::Migration
  def change
    add_column :compras, :cliente, :int
  end
end
