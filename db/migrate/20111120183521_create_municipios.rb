class CreateMunicipios < ActiveRecord::Migration
  def change
    create_table :municipios do |t|
      t.string :municipio
      t.references :estado

      t.timestamps
    end
    add_index :municipios, :estado_id
  end
end
