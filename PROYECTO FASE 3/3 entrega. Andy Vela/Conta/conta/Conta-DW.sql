USE [Conta-DW]
GO
/****** Object:  Table [dbo].[Datos_Empleado]    Script Date: 7/11/2020 21:37:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Datos_Empleado](
	[ID_Empleado] [int] NULL,
	[Puesto] [nvarchar](100) NULL,
	[Departamento] [nvarchar](100) NULL,
	[Nombre_Empleado] [nvarchar](100) NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Mercaderias]    Script Date: 7/11/2020 21:37:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Mercaderias](
	[ID_Proveedor] [int] NULL,
	[Descripcion_Merca] [nvarchar](100) NULL,
	[Cantidad] [nvarchar](50) NULL,
	[Costo_Factura] [nvarchar](100) NULL,
	[Forma_Pago] [nvarchar](100) NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Pagos_Impuestos]    Script Date: 7/11/2020 21:37:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Pagos_Impuestos](
	[IVA_Pagar] [nvarchar](50) NULL,
	[IVA_Cobrar] [nvarchar](50) NULL,
	[ISR] [nvarchar](50) NULL,
	[IGSS] [nvarchar](50) NULL,
	[IRTRA] [nvarchar](50) NULL,
	[INTECAP] [nvarchar](50) NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Proveedores]    Script Date: 7/11/2020 21:37:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Proveedores](
	[ID_Proveedores] [int] NULL,
	[Nombre] [nvarchar](100) NULL,
	[Direccion] [nvarchar](100) NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Publicidad]    Script Date: 7/11/2020 21:37:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Publicidad](
	[ID_Proveedor] [int] NULL,
	[Proveedor] [nvarchar](50) NULL,
	[Tipo_Marketing] [nvarchar](100) NULL,
	[Costo] [nvarchar](100) NULL,
	[Forma_Pago] [nvarchar](100) NULL
) ON [PRIMARY]

GO
